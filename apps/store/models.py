from django.db import models
from django.urls import reverse
from model_utils.models import TimeStampedModel
from django.core.validators import (MinValueValidator, MaxValueValidator)


class Product(TimeStampedModel):
    name = models.CharField(max_length=200)
    slug = models.SlugField(max_length=200)
    info = models.TextField(max_length=500, blank=True)
    image = models.ImageField(upload_to='photos/products', max_length=255)
    price = models.DecimalField(verbose_name='price', max_digits=8, decimal_places=2)
    sale = models.DecimalField(default=0, max_digits=8, decimal_places=2,
                               validators=(MinValueValidator(0), MaxValueValidator(100)))
    stock = models.IntegerField()
    is_available = models.BooleanField(default=True)
    category = models.ForeignKey('category.Category', on_delete=models.DO_NOTHING)

    def __str__(self):
        return self.name

    @property
    def get_final_price(self):
        return round(self.price - self.price * self.sale / 100, 2)

    @property
    def url(self):
        return reverse('product_detail', args=[self.category.slug, self.slug])


class ProductGallery(models.Model):
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE)
    image = models.ImageField(upload_to='photos/products', max_length=255)

    class Meta:
        verbose_name = 'Product gallery'
        verbose_name_plural = 'Product gallery'

    def __str__(self):
        return f'{self.product.name}'
