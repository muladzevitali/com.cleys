from django.contrib import admin
import admin_thumbnails

from .models import (Product, ProductGallery)


@admin_thumbnails.thumbnail('image')
class ProductGalleryInline(admin.TabularInline):
    model = ProductGallery
    extra = 1


class ProductAdmin(admin.ModelAdmin):
    list_display = ['name', 'price', 'stock', 'category', 'modified', 'is_available']
    prepopulated_fields = {'slug': ('name',)}
    inlines = (ProductGalleryInline,)


class VariationAdmin(admin.ModelAdmin):
    list_display = ('product', 'category', 'name', 'is_active')
    list_editable = ('is_active',)
    search_fields = ('product',)
    list_filter = ('product', 'category', 'name',)



class ProductGalleryAdmin(admin.ModelAdmin):
    list_display = ('pk', 'product')


admin.site.register(Product, ProductAdmin)
admin.site.register(ProductGallery, ProductGalleryAdmin)