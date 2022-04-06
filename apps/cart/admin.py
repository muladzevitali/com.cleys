from django.contrib import admin

from .models import (Cart, CartItem, PromoCode)


class CartItemInline(admin.TabularInline):
    model = CartItem
    extra = 1


class CartAdmin(admin.ModelAdmin):
    list_display = ('id', 'cart_id', 'user', 'created')
    inlines = (CartItemInline,)


class CartItemAdmin(admin.ModelAdmin):
    list_display = ('product', 'cart', 'quantity', 'is_active')


@admin.register(PromoCode)
class PromoCodeAdmin(admin.ModelAdmin):
    list_display = ('pk', 'code', 'discount')
    readonly_fields = ('times_used',)


admin.site.register(Cart, CartAdmin)
