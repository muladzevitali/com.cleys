from django.urls import reverse_lazy
from django.views.generic import CreateView

from .forms import RegisterForm
from .models import ClientRegister

from django.shortcuts import render
from django.contrib.auth import authenticate, login, logout
from django.contrib import messages
from django.urls import reverse_lazy
from django.http import HttpResponseRedirect, HttpResponse
from django.contrib.auth.decorators import login_required
from django.views.generic import View


class ClientView(CreateView):
    form_class = RegisterForm
    success_url = reverse_lazy('apps.urls:login')
    template_name = 'registration.html'
    model = ClientRegister


class ClientLoginView(View):
    success_url = reverse_lazy('index')
    failure_url = reverse_lazy('apps.urls:login')

    def get(self, request):
        return HttpResponseRedirect(self.success_url)

    def post(self, request):
        print(request.user.is_authenticated)
        if request.user.is_authenticated:
            return HttpResponseRedirect(reverse_lazy('apps.urls:login'))
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


def login_page(request):
    if request.user.is_authenticated:
        return HttpResponseRedirect(reverse_lazy('apps.urls:login'))
    else:
        success_url = reverse_lazy('#')
        failure_url = reverse_lazy('apps.urls:login')
        if request.method == 'POST':
            email = request.POST.get('email')
            password = request.POST.get('password')
            user = authenticate(request, email=email, password=password)
            if user is not None:
                login(request, user)
                return HttpResponseRedirect(success_url)
            else:
                messages.info(request, 'Email or password is incorrect')
                return HttpResponseRedirect(failure_url)
        context = {}
        return render(request, 'login.html', context)
