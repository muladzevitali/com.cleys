from django.db import models


class Category(models.Model):
    name = models.CharField(max_length=100)
    slug = models.SlugField(max_length=100, unique=True)
    description = models.CharField(max_length=255, blank=True, null=True)
    parent = models.ForeignKey('category.Category', on_delete=models.CASCADE, related_name='subcategories', blank=True,
                               null=True)

    class Meta:
        verbose_name = 'category'
        verbose_name_plural = 'categories'
        unique_together = ('slug', 'name',)

    def __str__(self):
        return self.name
