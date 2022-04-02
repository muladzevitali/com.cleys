from django.db import models
from django.urls import reverse
from model_utils.models import TimeStampedModel


def get_cart_id(request):
    if not request.session.session_key:
        request.session.create()

    return request.session.session_key


class Cart(TimeStampedModel):
    cart_id = models.CharField(max_length=255, blank=True)
    user = models.ForeignKey('user.User', on_delete=models.CASCADE, related_name='cart', null=True)

    def __str__(self):
        return f'{self.cart_id}'


class CartItem(TimeStampedModel):
    cart = models.ForeignKey('cart.Cart', on_delete=models.CASCADE, null=True)
    user = models.ForeignKey('user.User', on_delete=models.CASCADE, null=True)
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE)
    variation = models.ForeignKey('store.ProductVariation', on_delete=models.CASCADE, related_name='carts', null=True, blank=True)
    quantity = models.SmallIntegerField()
    is_active = models.BooleanField(default=True)

    def __str__(self):
        return f'{self.cart} - {self.product}'

    @classmethod
    def from_request(cls, request, product, variation, quantity, cart):
        cart_item = cls(product=product, variation=variation, quantity=quantity, cart=cart)
        if request.user.is_authenticated:
            cart_item.user = request.user

        cart_item.save()
        return cart

    @property
    def increment_cart_item_quantity_url(self):
        return reverse('increment_cart_item_quantity', args=[self.id])

    @property
    def decrement_cart_item_quantity_url(self):
        return reverse('decrement_cart_item_quantity', args=[self.id])

    @property
    def remove_cart_item_url(self):
        return reverse('remove_cart_item', args=[self.id])

    @property
    def total(self):
        return self.product.price * self.quantity
