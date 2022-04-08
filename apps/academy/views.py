from django.views.generic import (ListView, DetailView)

from apps.academy import models


class AcademyListView(ListView):
    template_name = 'academy.html'
    model = models.Academy
    paginate_by = 10
    ordering = ('-pk',)

    def get_queryset(self):
        queryset = self.model.objects.all()
        if self.kwargs.get('category_slug'):
            queryset = queryset.filter(category__slug=self.kwargs.get('category_slug'))

        return queryset


class AcademyDetailView(DetailView):
    template_name = 'academy-detail.html'
    model = models.Academy

    def get_queryset(self):
        queryset = self.model.objects.filter(category__slug=self.kwargs.get('category_slug', ''))
        return queryset
