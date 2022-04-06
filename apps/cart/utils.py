from django.conf import settings

from apps.cart.models import (Cart, CartItem)
from apps.store.utils import get_product_price


def get_cart(request):
    cart = Cart.from_request(request)
    return cart


def get_cart_items(request):
    cart = get_cart(request)
    cart_items = CartItem.objects.filter(cart=cart, is_active=True)

    return cart, cart_items


def get_cart_info(request):
    cart, cart_items = get_cart_items(request)

    total = sum(get_product_price(request, cart_item.product) * cart_item.quantity for cart_item in cart_items)

    if cart.promo_code and cart.promo_code.is_valid(request, total):
        if cart.promo_code.type == 'fixed':
            total -= cart.promo_code.discount
        if cart.promo_code.type == 'percentage':
            total -= total * cart.promo_code.discount / 100

    quantity = sum(cart_item.quantity for cart_item in cart_items)
    tax = settings.TAX * total
    grand_total = total + tax

    context = dict(cart_items=cart_items, total=total, quantity=quantity, tax=tax, grand_total=grand_total, cart=cart)

    return context
