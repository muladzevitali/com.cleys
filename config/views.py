from django.shortcuts import render

from apps.academy.models import Academy
from apps.store.models import Product


def index(request):
    popular_products = Product.objects.all().order_by('-views__count')[:4]
    academies = Academy.objects.all().order_by('-pk')[:3]
    context = dict(popular_products=popular_products, academies=academies)
    return render(request, 'base.html', context=context)
