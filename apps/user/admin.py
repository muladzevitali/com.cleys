from django.contrib import admin
from django.contrib.auth.admin import UserAdmin

from apps.user.models import User


@admin.register(User)
class UserAdmin(UserAdmin):
    list_display = ('pk', 'username', 'email', 'is_staff', 'is_superuser')
    fieldsets = UserAdmin.fieldsets + (
        (None, {'fields': ('sale', 'company_name', 'vat_number', 'street_name', 'house_number', 'postal_code',
                           'city', 'country', 'phone_number')}),
    )
