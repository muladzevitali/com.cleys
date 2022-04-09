from ckeditor.fields import RichTextField
from django.db import models
from django.utils.translation import gettext as _
from model_utils.models import TimeStampedModel


class FAQCategory(TimeStampedModel):
    name = models.CharField(max_length=100)
    slug = models.SlugField(max_length=100)

    def __str__(self):
        return self.name


class FAQ(TimeStampedModel):
    question = models.CharField(max_length=1000)
    answer = RichTextField(max_length=3000)
    category = models.ForeignKey('faq.FAQCategory', on_delete=models.CASCADE, related_name='faqs')

    def __str__(self):
        return f'FAQ({self.pk}) - {self.category.name}'


class Contact(models.Model):
    SUBJECT_CHOICES = (
        ('Algemene vraag', 'Algemene vraag'), ('Facturatie', 'Facturatie'), ('Mijn bestelling', 'Mijn bestelling'),
        ('Andere', 'Andere'))
    company_name = models.CharField(max_length=256, null=True, blank=True)
    vat_number = models.CharField(max_length=256, null=True, blank=True)
    last_name = models.CharField(max_length=256)
    first_name = models.CharField(max_length=256)
    phone_number = models.CharField(max_length=256, null=True, blank=True)
    email = models.EmailField(max_length=256)
    subject = models.CharField(max_length=256, choices=SUBJECT_CHOICES)
    message = models.TextField()

    class Meta:
        verbose_name = _('Contact')
        verbose_name_plural = _('Contacts')
