from django.contrib import admin
from apps.faq import models


@admin.register(models.FAQCategory)
class FAQCategoryAdmin(admin.ModelAdmin):
    list_display = ('pk', 'name')
    prepopulated_fields = {'slug': ('name',)}


@admin.register(models.FAQ)
class FAQAdmin(admin.ModelAdmin):
    list_display = ('pk', 'question', 'category')
