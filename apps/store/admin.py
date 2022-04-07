import admin_thumbnails
from django.contrib import admin

from .models import (Product, ProductGallery, ProductVariation, ProductAttachment)


@admin_thumbnails.thumbnail('image')
class ProductGalleryInline(admin.TabularInline):
    model = ProductGallery
    extra = 1


class ProductVariationInline(admin.TabularInline):
    model = ProductVariation
    extra = 1


class ProductAttachmentInline(admin.TabularInline):
    model = ProductAttachment
    extra = 1


@admin.register(Product)
class ProductAdmin(admin.ModelAdmin):
    list_display = ['name', 'price', 'stock', 'category', 'modified', 'is_available', 'get_views']
    list_editable = ('is_available',)
    prepopulated_fields = {'slug': ('name',)}
    inlines = (ProductGalleryInline, ProductVariationInline, ProductAttachmentInline)
    search_fields = ('name',)

    def get_views(self, obj):
        return obj.views.count

    get_views.short_description = 'Product views'


@admin.register(ProductVariation)
class VariationAdmin(admin.ModelAdmin):
    list_display = ('product', 'category', 'name', 'is_active')
    list_editable = ('is_active',)
    search_fields = ('product',)
    list_filter = ('product', 'category', 'name',)
