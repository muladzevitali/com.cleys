import math
import uuid

from ckeditor.fields import RichTextField
from django.conf import settings
from django.core.validators import (MinValueValidator, MaxValueValidator)
from django.db import models
from django.urls import reverse
from model_utils.models import TimeStampedModel


class Product(TimeStampedModel):
    uuid = models.UUIDField(editable=False, default=uuid.uuid4, unique=True)
    name = models.CharField(max_length=200)
    slug = models.SlugField(max_length=200)
    info = models.CharField(max_length=100, blank=True)
    description = RichTextField(max_length=500, blank=True)
    image = models.ImageField(upload_to='photos/products', max_length=255)
    price = models.DecimalField(verbose_name='price', max_digits=8, decimal_places=2)
    sale = models.DecimalField(default=0, max_digits=8, decimal_places=2,
                               validators=(MinValueValidator(0), MaxValueValidator(100)))
    stock = models.IntegerField()
    is_available = models.BooleanField(default=True)
    category = models.ForeignKey('category.Category', on_delete=models.DO_NOTHING)

    usage_per_unit = models.FloatField(verbose_name='Volume required for 1 m2', blank=True, null=True)
    volume_of_unit = models.FloatField(verbose_name='Volume of product', blank=True, null=True)

    class Meta:
        unique_together = ('slug', 'uuid')

    def __str__(self):
        return self.name

    @property
    def get_final_price(self):
        return round(self.price - self.price * self.sale / 100, 2)

    @property
    def logged_in_price(self):
        excluded_btw = self.price - self.price * settings.TAX
        return round(excluded_btw - self.price * self.sale / 100, 2)

    @property
    def url(self):
        return reverse('store-product-detail', args=(self.category.slug, self.slug, self.uuid))

    @property
    def default_quantity(self):
        if not self.usage_per_unit:
            return
        return math.ceil(self.default_volume / self.volume_of_unit)

    @property
    def default_volume(self):
        if not self.usage_per_unit:
            return
        return self.usage_per_unit * 20


class ProductGallery(models.Model):
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE, related_name='images')
    image = models.ImageField(upload_to='photos/products', max_length=255)

    class Meta:
        verbose_name = 'Product gallery'
        verbose_name_plural = 'Product gallery'

    def __str__(self):
        return f'{self.product.name}'


class ProductAttachment(TimeStampedModel):
    name = models.CharField(max_length=512)
    file = models.FileField(upload_to='files/products')
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE, related_name='attachments')

    def __str__(self):
        return self.name


class ProductVariationManager(models.Manager):
    def colors(self):
        return super().filter(category='color', is_active=True)


class ProductVariation(TimeStampedModel):
    category_choices = (
        ('color', 'Color'),
    )
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE, related_name='variations')
    category = models.CharField(max_length=100, choices=category_choices)
    name = models.CharField(max_length=100)
    is_active = models.BooleanField(default=True)
    objects = ProductVariationManager()

    def __str__(self):
        return f'{self.product} - {self.category} - {self.name}'


class ProductView(TimeStampedModel):
    product = models.OneToOneField('store.Product', on_delete=models.CASCADE, related_name='views')
    count = models.PositiveBigIntegerField(default=0)

    def increase_by_one(self):
        self.count += 1
        self.save()

    def __str__(self):
        return f'{self.product} - {self.count}'
