from django.contrib import messages
from django.contrib.auth import authenticate, login, logout
from django.http import HttpResponseRedirect
from django.shortcuts import render
from django.urls import reverse_lazy
from django.views.generic import CreateView
from django.views.generic import View

from .forms import RegisterForm
from .models import User


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
        print(request.user.is_authenticated)
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
