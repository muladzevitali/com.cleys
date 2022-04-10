from django.conf import settings
from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.forms import PasswordResetForm
from django.contrib.auth.password_validation import validate_password
from django.contrib.auth.tokens import default_token_generator
from django.contrib.sites.shortcuts import get_current_site
from django.core.exceptions import ValidationError
from django.core.mail import send_mail
from django.http import HttpResponseRedirect
from django.shortcuts import render, redirect
from django.template.loader import render_to_string
from django.urls import reverse_lazy
from django.utils.encoding import force_bytes
from django.utils.http import urlsafe_base64_encode
from django.views.generic import View, CreateView

from .forms import RegisterForm, UpdateAddressDetailsForm, UpdateLoginDetailsForm, UpdateContactDetailsForm
from .models import User


class ClientView(CreateView):
    form_class = RegisterForm
    success_url = 'login'
    template_name = 'registration.html'
    model = User

    def form_valid(self, form):
        user = form.save(commit=False)
        password = form.cleaned_data['password']
        try:
            validate_password(password, user)
        except ValidationError as e:
            form.add_error('password', e)
            return render(self.request, self.template_name, {'form': form})
        return super().form_valid(form)


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


class ClientLogoutView(View):
    success_url = reverse_lazy('index')

    def get(self, request):
        logout(request)
        return HttpResponseRedirect(self.success_url)


class PasswordResetView(View):
    success_url = reverse_lazy('password_reset')
    template_name = 'password/password_reset.html'
    password_reset_form = PasswordResetForm

    def get(self, request):
        return render(request, self.template_name, context={"password_reset_form": self.password_reset_form()})

    def post(self, request):
        password_reset_form = self.password_reset_form(request.POST)
        if not password_reset_form.is_valid():
            messages.info(request, 'An invalid email has been entered.')
            return render(request=request, template_name="password/password_reset.html",
                          context={"password_reset_form": password_reset_form})

        user = User.objects.filter(email=password_reset_form.cleaned_data['email']).first()
        if not user:
            return redirect("/password_reset/done/")

        subject = "Password Reset Requested"
        data = {
            "email": user.email,
            'domain': get_current_site(request),
            "uid": urlsafe_base64_encode(force_bytes(user.pk)),
            "user": user,
            'token': default_token_generator.make_token(user),
            'protocol': 'http',
        }
        email = render_to_string("password/password_reset_email.html", data)

        send_mail(subject, email, settings.EMAIL_CONTACT_FORM_RECEIVER, [user.email],
                  fail_silently=True)

        return redirect("/password_reset/done/")


class UpdateClientBase(View):
    success_url = reverse_lazy('update_client')

    def form_invalid(self, request, form):

        error_msg = '\n'.join(' '.join(msg for msg in error) for error in form.errors.values())
        messages.error(request, error_msg)
        return HttpResponseRedirect(self.success_url)


class UpdateClientAddressView(UpdateClientBase):

    def post(self, request):
        form = UpdateAddressDetailsForm(data=request.POST, instance=request.user)
        if not form.is_valid():
            self.form_invalid(request, form)

        form.save()
        return HttpResponseRedirect(self.success_url)


class UpdateContactDetailView(UpdateClientBase):

    def post(self, request):
        form = UpdateContactDetailsForm(data=request.POST, instance=request.user)
        if not form.is_valid():
            self.form_invalid(request, form)

        form.save()
        return HttpResponseRedirect(self.success_url)


class UpdateLoginDetailView(UpdateClientBase):

    def post(self, request):
        form = UpdateLoginDetailsForm(data=request.POST, instance=request.user)
        if not form.is_valid():
            self.form_invalid(request, form)

        request.user.set_password(form.cleaned_data['password'])

        return HttpResponseRedirect(self.success_url)


class UpdateClientView(View):
    template_name = 'client_details.html'
    success_url = reverse_lazy('update_client')

    def get(self, request):
        address_form = UpdateAddressDetailsForm()
        contact_form = UpdateContactDetailsForm()
        login_form = UpdateLoginDetailsForm()

        context = dict(address_form=address_form, contact_form=contact_form, login_form=login_form)
        return render(request, self.template_name, context=context)
