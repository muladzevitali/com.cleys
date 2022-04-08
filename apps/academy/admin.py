from django.contrib import admin
from apps.academy import models


@admin.register(models.AcademyCategory)
class AcademyCategoryAdmin(admin.ModelAdmin):
    list_display = ('name', 'pk')
    prepopulated_fields = {'slug': ('name',)}


@admin.register(models.Academy)
class AcademyAdmin(admin.ModelAdmin):
    list_display = ('title', 'category',)
