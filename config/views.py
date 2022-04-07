from django.shortcuts import render

from apps.store.models import Product


def index(request):
    popular_products = Product.objects.all().order_by('-views__count')[:4]
    context = dict(popular_products=popular_products)
    return render(request, 'base.html', context=context)
