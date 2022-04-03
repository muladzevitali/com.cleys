import math
import uuid
from random import sample

from django.core.exceptions import ValidationError
from django.db.models import Q, F
from django.http import JsonResponse
from django.shortcuts import get_object_or_404
from django.views.generic import ListView, DetailView

from apps.category.models import Category
from apps.store import models


class StoreListView(ListView):
    template_name = 'store.html'
    queryset = models.Product.objects.all().order_by('pk')
    paginate_by = 9
    valid_ordering_columns = ('pk', '-views__count', 'pop''created', 'price', '-price')

    def get_queryset(self):
        if self.kwargs.get("category_slug"):
            category = Category.objects.get(slug=self.kwargs['category_slug'])
            query_filter = Q(category__id=category.pk)
            if category.subcategories:
                for subcategory in category.subcategories.all():
                    query_filter = query_filter | Q(category__id=subcategory.pk)

            self.queryset = self.queryset.filter(query_filter)

        ordering = self.get_ordering()
        if ordering:
            self.queryset = self.queryset.order_by(*ordering)
        return self.queryset.filter(is_available=True)

    def get_ordering(self):
        ordering = self.request.GET.get('ordering', '-views__count')
        if ordering not in self.valid_ordering_columns:
            return 'pk',
        return ordering,


class ProductDetailView(DetailView):
    template_name = 'product.html'
    model = models.Product
    queryset = models.Product.objects.all()

    def get_random_items(self, num_items):
        total_objects = self.model.objects.count()
        num_items = min(total_objects, num_items)
        object_ids = sample(range(1, total_objects + 1), num_items)
        return object_ids

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        random_product_ids = self.get_random_items(4)
        context['related_products'] = self.model.objects.filter(pk__in=random_product_ids)

        product_views, _ = models.ProductView.objects.get_or_create(product=self.object)
        product_views.increase_by_one()

        return context

    def get_queryset(self):
        queryset = self.model.objects
        queryset = queryset.filter(uuid=self.kwargs['product_uuid'])
        return queryset


def calculate_required_product_volume(request, product_uuid: uuid.UUID):
    product = get_object_or_404(models.Product, uuid=product_uuid)

    if not (product.volume_of_unit or product.usage_per_unit):
        raise ValidationError('Not valid product')

    surface = float(request.POST['surface'])
    total_amount = surface * product.usage_per_unit
    product_quantity = math.ceil(total_amount / product.volume_of_unit)
    data = dict(total_amount=total_amount, product_quantity=product_quantity)

    return JsonResponse(data=data)
