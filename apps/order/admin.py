from django.contrib import admin

from apps.order import models


@admin.register(models.Country)
class CountryAdmin(admin.ModelAdmin):
    list_display = ('pk', 'name',)


class OrderProductInline(admin.TabularInline):
    model = models.OrderProduct
    extra = 0

    def has_change_permission(self, request, obj=None):
        return False


class PaymentInline(admin.StackedInline):
    model = models.Payment
    extra = 0

    def has_change_permission(self, request, obj=None):
        return False


@admin.register(models.Order)
class OrderAdmin(admin.ModelAdmin):
    list_display = ('order_number', 'full_name', 'email', 'order_total', 'tax', 'status', 'ip')
    list_filter = ('status', 'is_ordered',)
    search_fields = ('order_number', 'first_name', 'last_name', 'email',)
    list_per_page = 50
    inlines = (OrderProductInline, PaymentInline,)


admin.site.register(models.OrderProduct)
