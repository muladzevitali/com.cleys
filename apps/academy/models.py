import functools

from ckeditor_uploader.fields import RichTextUploadingField
from django.db import models
from django.shortcuts import reverse
from model_utils.models import TimeStampedModel

from config.utils import get_image_path


class AcademyCategory(TimeStampedModel):
    name = models.CharField(max_length=64)
    slug = models.SlugField()

    def __str__(self):
        return self.name


class Academy(TimeStampedModel):
    upload_to_partial = functools.partial(get_image_path, upload_to='photos/academies')

    title = models.CharField(max_length=256)
    category = models.ForeignKey('academy.AcademyCategory', on_delete=models.CASCADE, related_name='academies')
    image = models.ImageField(upload_to=upload_to_partial)
    content = RichTextUploadingField(extra_plugins=['youtube', 'html5video'],
                                     external_plugin_resources=[
                                         ('youtube', '/static/js/youtube/', 'plugin.js'),
                                         ('html5video', '/static/js/html5video/', 'plugin.js')], )

    @property
    def url(self):
        return reverse('academy-detail', args=(self.category.slug, self.pk))

    def __str__(self):
        return self.title
