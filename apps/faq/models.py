from ckeditor.fields import RichTextField
from django.db import models
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
