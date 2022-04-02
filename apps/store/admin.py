from django.contrib import admin
import admin_thumbnails

from .models import (Product, ProductGallery, ProductVariation)


@admin_thumbnails.thumbnail('image')
class ProductGalleryInline(admin.TabularInline):
    model = ProductGallery
    extra = 1


class ProductVariationInline(admin.TabularInline):
    model = ProductVariation
    extra = 1


@admin.register(Product)
class ProductAdmin(admin.ModelAdmin):
    list_display = ['name', 'price', 'stock', 'category', 'modified', 'is_available']
    prepopulated_fields = {'slug': ('name',)}
    inlines = (ProductGalleryInline, ProductVariationInline)


@admin.register(ProductVariation)
class VariationAdmin(admin.ModelAdmin):
    list_display = ('product', 'category', 'name', 'is_active')
    list_editable = ('is_active',)
    search_fields = ('product',)
    list_filter = ('product', 'category', 'name',)


@admin.register(ProductGallery)
class ProductGalleryAdmin(admin.ModelAdmin):
    list_display = ('pk', 'product')
