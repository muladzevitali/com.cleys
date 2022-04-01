from django.db.models import Q
from django.views.generic import ListView
from apps.store import models
from apps.category.models import Category


class StoreListView(ListView):
    template_name = 'store.html'
    queryset = models.Product.objects.all().order_by('pk')
    paginate_by = 9
    valid_ordering_columns = ('pk', 'created', 'price', '-price')

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
        ordering = self.request.GET.get('ordering', '-created')
        if ordering not in self.valid_ordering_columns:
            return 'pk',
        return ordering,
