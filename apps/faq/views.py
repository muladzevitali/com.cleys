from django.views.generic import ListView

from apps.faq import models


class FAQListView(ListView):
    model = models.FAQ
    template_name = 'faq.html'
    queryset = models.FAQ.objects
    default_category_slug = 'spuitkurk'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        category_slug = self.kwargs.get('category_slug', self.default_category_slug)
        context['category'] = models.FAQCategory.objects.filter(slug=category_slug).first()

        return context

    def get_queryset(self):
        category_slug = self.kwargs.get("category_slug", self.default_category_slug)
        self.queryset = self.queryset.filter(category__slug=category_slug)

        return self.queryset
