from django.shortcuts import render

from apps.academy.models import Academy
from apps.store.models import Product
from apps.inspiration.models import Inspiration


def index(request):
    popular_products = Product.objects.all().order_by('-views__count')[:4]
    academies = Academy.objects.all().order_by('-pk')[:3]
    inspirations = Inspiration.objects.filter(use_in_slider=True, slider_image__isnull=False)

    context = dict(popular_products=popular_products, academies=academies, inspirations=inspirations)
    return render(request, 'base.html', context=context)
