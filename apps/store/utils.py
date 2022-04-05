def get_product_price(request, product):
    """
    Product price calculation logic
    """
    if request.user.is_authenticated:
        price = product.logged_in_price
        price -= round(price * request.user.sale / 100, 2)
        return price

    return product.get_final_price
