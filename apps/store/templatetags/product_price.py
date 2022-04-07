from django import template

from apps.store import utils
from apps.store.models import Product

register = template.Library()


@register.simple_tag
def product_price(request, product_id):
    product = Product.objects.get(pk=product_id)
    return utils.get_product_price(request, product)
