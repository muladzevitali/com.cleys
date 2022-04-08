from django.views.generic import (ListView, DetailView)

from apps.inspiration import models


class InspirationListView(ListView):
    model = models.Inspiration
    template_name = 'inspiration-list.html'
    paginate_by = 4


class InspirationDetailView(DetailView):
    model = models.Inspiration
    template_name = 'inspiration-detail.html'
