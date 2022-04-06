from apps.cart import utils


def cart_item_counter(request):
    if 'admin' in request.path:
        return dict()

    _, cart_items = utils.get_cart_items(request)

    num_items_in_cart = sum(cart_item.quantity for cart_item in cart_items)

    return dict(num_items_in_cart=num_items_in_cart)


def cart_context(request):
    if 'admin' in request.path:
        return dict()

    cart_info = utils.get_cart_info(request)

    return cart_info
