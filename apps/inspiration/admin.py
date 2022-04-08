from django.contrib import admin

from apps.inspiration import models


class InspirationGalleryInline(admin.TabularInline):
    model = models.InspirationGallery
    extra = 1


@admin.register(models.Inspiration)
class InspirationAdmin(admin.ModelAdmin):
    list_display = ('pk', 'title')
    inlines = (InspirationGalleryInline,)
