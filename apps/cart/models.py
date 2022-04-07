import datetime
import decimal

from django.core.exceptions import ValidationError
from django.core.validators import MinValueValidator
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
    promo_code = models.ForeignKey('cart.PromoCode', on_delete=models.DO_NOTHING, related_name='cart', null=True)

    def clear(self):
        for cart_item in self.items.all():
            cart_item.delete()

        self.promo_code = None
        self.save()

    @classmethod
    def from_request(cls, request):
        """
        Load cart from request. Cart stays consistent while login in and is reset when log out.
        If there are some items before login and user also has some items previously those two carts merge
        """
        cart_id = get_cart_id(request)
        cart, _ = Cart.objects.get_or_create(cart_id=cart_id)

        if not request.user.is_authenticated:
            return cart

        user_cart = Cart.objects.filter(user=request.user).first()
        if not user_cart or cart == user_cart:
            cart.user = request.user
            cart.save()

            return cart

        user_cart.cart_id = cart.cart_id
        user_cart_items = user_cart.items.all()
        for cart_item in cart.items.all():
            already_in_cart = False

            for user_cart_item in user_cart_items:
                if cart_item.product == user_cart_item.product and cart_item.variation == user_cart_item.variation:
                    user_cart_item.quantity += cart_item.quantity
                    user_cart_item.save()
                    already_in_cart = True

            if not already_in_cart:
                cart_item.cart = user_cart
                cart_item.save()

        cart.delete()
        return user_cart

    def __str__(self):
        return f'{self.cart_id}'


class CartItem(TimeStampedModel):
    cart = models.ForeignKey('cart.Cart', on_delete=models.CASCADE, related_name='items', null=True)
    user = models.ForeignKey('user.User', on_delete=models.CASCADE, null=True)
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE)
    variation = models.ForeignKey('store.ProductVariation', on_delete=models.CASCADE, related_name='carts', null=True,
                                  blank=True)
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


def only_isalnum(value):
    if not value.isalnum():
        raise ValidationError('Code should only contain alpha and numerical values')


class PromoCode(TimeStampedModel):
    class TypeChoices(models.TextChoices):
        FIXED = 'fixed'
        PERCENTAGE = 'percentage'

    class TargetChoices(models.TextChoices):
        PRIVATE = 'private'
        PROFESSION = 'profession'
        BOTH = 'both'

    code = models.CharField(max_length=6, validators=(only_isalnum,))
    valid_until = models.DateField()
    discount = models.DecimalField(max_digits=8, decimal_places=2,
                                   validators=(MinValueValidator(decimal.Decimal('0.0')),))
    type = models.CharField(max_length=32, choices=TypeChoices.choices)
    min_order = models.PositiveIntegerField()
    total_uses = models.PositiveIntegerField(default=1)
    target = models.CharField(max_length=32, choices=TargetChoices.choices)
    times_used = models.PositiveIntegerField(default=0)

    def is_valid(self, request, total_amount: int):
        if self.valid_until < datetime.date.today():
            return False

        if self.times_used > self.total_uses:
            return False

        if self.target == 'profession' and not request.user.is_authenticated:
            return False

        if self.target == 'private' and request.user.is_authenticated:
            return False

        if total_amount < self.min_order:
            return False

        return True

    def __str__(self):
        return f'{self.code} - {self.total_uses}'
