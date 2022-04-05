from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.tokens import default_token_generator
from django.core.mail import send_mail
from django.db.models.query_utils import Q
from django.http import HttpResponseRedirect, BadHeaderError, HttpResponse
from django.shortcuts import render, redirect
from django.template.loader import render_to_string
from django.urls import reverse_lazy
from django.utils.encoding import force_bytes
from django.utils.http import urlsafe_base64_encode
from django.views.generic import View, CreateView

from .forms import RegisterForm
from .models import User
from django.contrib.auth.forms import PasswordResetForm


class ClientView(CreateView):
    form_class = RegisterForm
    success_url = reverse_lazy('login')
    template_name = 'registration.html'
    model = User


class ClientLoginView(View):
    success_url = reverse_lazy('index')
    failure_url = reverse_lazy('login')

    def get(self, request):
        return HttpResponseRedirect(self.success_url)

    def post(self, request):
        if request.user.is_authenticated:
            return HttpResponseRedirect(reverse_lazy('login'))
        else:
            email = request.POST.get('email')
            password = request.POST.get('password')
            user = authenticate(email=email, password=password)
            if user is not None:
                login(request, user)
                return HttpResponseRedirect(self.success_url)
            else:
                messages.info(request, 'Email or password is incorrect')
                return HttpResponseRedirect(self.failure_url)
        context = {}
        return render(request, 'login.html', context)


class ClientLogoutView(View):
    success_url = reverse_lazy('index')

    def get(self, request):
        logout(request)
        return HttpResponseRedirect(self.success_url)


class PasswordResetView(View):
    success_url = reverse_lazy('password_reset')
    template_name = 'password/password_reset.html'

    def get(self, request):
        print('get')
        return render(request, self.template_name)

    def post(self, request):
        password_reset_form = PasswordResetForm(request.POST)
        if password_reset_form.is_valid():
            data = password_reset_form.cleaned_data['email']
            associated_users = User.objects.filter(Q(email=data))
            if associated_users.exists():
                for user in associated_users:
                    subject = "Password Reset Requested"
                    email_template_name = "password/password_reset_email.txt"
                    c = {
                        "email": user.email,
                        'domain': '127.0.0.1:8000',
                        'site_name': 'Website',
                        "uid": urlsafe_base64_encode(force_bytes(user.pk)),
                        "user": user,
                        'token': default_token_generator.make_token(user),
                        'protocol': 'http',
                    }
                    email = render_to_string(email_template_name, c)
                    try:
                        send_mail(subject, email, 'admin@example.com', [user.email], fail_silently=False)
                    except BadHeaderError:
                        return HttpResponse('Invalid header found.')
                    messages.success(request, 'A message with reset password instructions has been sent to your inbox.')
                    return redirect("/password_reset/done/")
            messages.info(request, 'An invalid email has been entered.')
        password_reset_form = PasswordResetForm()
        return render(request=request, template_name="password/password_reset.html",
                      context={"password_reset_form": password_reset_form})
