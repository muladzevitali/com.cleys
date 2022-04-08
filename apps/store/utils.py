from random import sample


def get_product_price(request, product):
    """
    Product price calculation logic
    """
    if request.user.is_authenticated:
        price = product.logged_in_price
        price -= round(price * request.user.sale / 100, 2)
        return price

    return product.get_final_price


def get_random_indices(model, num_items):
    total_objects = model.objects.count()
    num_items = min(total_objects, num_items)
    object_ids = sample(range(1, total_objects + 1), num_items)
    return object_ids
