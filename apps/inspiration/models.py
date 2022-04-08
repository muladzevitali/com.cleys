import functools

from ckeditor.fields import RichTextField
from django.db import models
from model_utils.models import TimeStampedModel

from config.utils import get_image_path


class Inspiration(TimeStampedModel):
    upload_to_partial = functools.partial(get_image_path, upload_to='photos/inspirations')

    title = models.CharField(max_length=128)
    description = RichTextField(blank=True)
    image = models.ImageField(upload_to=upload_to_partial)
    thumbnail = models.ImageField(upload_to=upload_to_partial)

    def __str__(self):
        return self.title


class InspirationGallery(TimeStampedModel):
    upload_to_partial = functools.partial(get_image_path, upload_to='photos/inspirations')

    name = models.CharField(max_length=64)
    image = models.ImageField(upload_to=upload_to_partial)
    inspiration = models.ForeignKey('inspiration.Inspiration', on_delete=models.CASCADE, related_name='gallery')

    def __str__(self):
        return f'{self.inspiration.title}'
