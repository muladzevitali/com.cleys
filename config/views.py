from django.shortcuts import render
from apps.category.models import Category


def index(request):
    return render(request, 'base.html')
