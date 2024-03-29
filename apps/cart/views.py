from django.shortcuts import (render, get_object_or_404, redirect)
from django.views.decorators.http import require_http_methods
from django.views.generic import FormView

from apps.cart import utils
from apps.cart.forms import PromoCodeActivationForm, AddToCartForm
from apps.cart.models import (CartItem, PromoCode)
from apps.store.models import Product, ProductVariation


def index(request):
    context = utils.get_cart_info(request)

    return render(request, 'cart.html', context=context)


@require_http_methods(request_method_list=['POST'])
def add_to_cart(request, product_uuid):
    product = get_object_or_404(Product, uuid=product_uuid, stock__gt=0)
    form = AddToCartForm(request.POST)
    if not form.is_valid():
        return redirect(product.url)

    cart, cart_items = utils.get_cart_items(request)

    if form.cleaned_data['variation']:
        variation = get_object_or_404(ProductVariation, pk=form.cleaned_data['variation'])
        if not cart_items:
            CartItem.from_request(request, product=product, variation=variation,
                                  quantity=form.cleaned_data['quantity'],
                                  cart=cart)

            return redirect('cart-index')

        for item in cart_items:
            if item.variation == variation:
                item.quantity += 1
                item.save()

                return redirect('cart-index')

        CartItem.from_request(request, product=product, variation=variation,
                              quantity=form.cleaned_data['quantity'],
                              cart=cart)

        return redirect('cart-index')

    if not cart_items:
        CartItem.from_request(request, product=product,
                              variation=None,
                              quantity=form.cleaned_data['quantity'],
                              cart=cart)
        return redirect('cart-index')

    for item in cart_items:
        if item.product == product:
            item.quantity += form.cleaned_data['quantity']
            item.save()

            return redirect('cart-index')

    _ = CartItem.from_request(request, product=product,
                              variation=None,
                              quantity=form.cleaned_data['quantity'],
                              cart=cart)

    return redirect('cart-index')


@require_http_methods(request_method_list=['GET'])
def remove_cart_item(request, cart_item_id):
    cart_item = get_object_or_404(CartItem, pk=cart_item_id)

    cart_item.delete()

    return redirect('cart-index')


@require_http_methods(request_method_list=['GET'])
def increment_cart_item_quantity(request, cart_item_id):
    cart_item = get_object_or_404(CartItem, pk=cart_item_id)
    cart_item.quantity += 1
    cart_item.save()

    return redirect('cart-index')


@require_http_methods(request_method_list=['GET'])
def decrement_cart_item_quantity(request, cart_item_id):
    cart_item = get_object_or_404(CartItem, pk=cart_item_id)
    if cart_item.quantity > 1:
        cart_item.quantity -= 1
        cart_item.save()
    else:
        ...

    return redirect('cart-index')


class PromoCodeActivationFormView(FormView):
    form_class = PromoCodeActivationForm
    template_name = 'cart.html'
    success_url = 'cart-index'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        cart_context = utils.get_cart_info(self.request)
        context.update(cart_context)

        return context

    def form_valid(self, form):
        promo_code = PromoCode.objects.filter(code=form.cleaned_data['code'].lower()).first()
        cart = utils.get_cart(self.request)
        cart.promo_code = promo_code
        cart.save()

        promo_code.times_used += 1
        promo_code.save()

        return redirect(self.success_url)
