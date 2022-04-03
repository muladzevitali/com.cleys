from django.contrib import admin
from django.contrib.auth.admin import UserAdmin

from apps.user.models.user_model import User

admin.site.register(User, UserAdmin)
