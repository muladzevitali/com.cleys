from django.shortcuts import redirect, render
from django.views.generic import ListView, FormView

from apps.faq import models
from apps.faq.forms import ContactForm


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


class ContactFormView(FormView):
    template_name = 'contact.html'
    form_class = ContactForm
    success_url = 'contact'

    def form_invalid(self, form):
        print(form.errors)
        super().form_invalid(form)
        return render(self.request, self.template_name, context=dict(form=form))

    def form_valid(self, form):
        form.save()
        form.send_email()
        return redirect(self.success_url)
