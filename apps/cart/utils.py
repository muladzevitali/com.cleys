from django.conf import settings

from apps.cart.models import (Cart, CartItem, get_cart_id)


def get_cart(request):
    if request.user.is_authenticated:
        cart, _ = Cart.objects.get_or_create(user_id=request.user.pk)
    else:
        cart, _ = Cart.objects.get_or_create(cart_id=get_cart_id(request))

    return cart


def get_cart_items(request):
    cart = get_cart(request)
    cart_items = CartItem.objects.filter(cart=cart, is_active=True)

    return cart, cart_items


def get_cart_info(request):
    cart, cart_items = get_cart_items(request)

    total = sum(get_product_price(request, cart_item.product) * cart_item.quantity for cart_item in cart_items)
    quantity = sum(cart_item.quantity for cart_item in cart_items)
    tax = settings.TAX * total
    grand_total = total + tax

    context = dict(cart_items=cart_items, total=total, quantity=quantity, tax=tax, grand_total=grand_total, cart=cart)

    return context


def get_product_price(request, product):
    if request.user.is_authenticated:
        return product.logged_in_price

    return product.get_final_price
