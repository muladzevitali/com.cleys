from django.core.mail import EmailMultiAlternatives
from django.template.loader import render_to_string
from django.utils.translation import gettext as _

from apps.store.utils import get_product_price
from apps.order import models


def finalize_order(request, order, payment, cart_items):
    user = request.user if request.user.is_authenticated else None

    for cart_item in cart_items:
        order_product = models.OrderProduct(order=order, product=cart_item.product)
        order_product.variation = cart_item.variation
        order_product.user = user
        order_product.quantity = cart_item.quantity
        order_product.product_price = get_product_price(request, cart_item.product)
        order_product.is_ordered = True

        order_product.save()

        product = cart_item.product
        product.stock -= cart_item.quantity
        product.save()

    payment.status = payment.PaymentStatusChoices.PAID
    payment.save()
    order.status = order.OrderStatusChoices.ACCEPTED
    order.save()


def clear_cart(cart_items):
    cart_items.delete()


def notify_on_completion(request, order, cart_info):
    order_products = order.order_products.all()
    subject = _('Order for ') + str(order.order_number)

    message = render_to_string('mail/order.html',
                               dict(request=request,
                                    order=order,
                                    order_products=order_products,
                                    total=cart_info['total'],
                                    grand_total=cart_info['grand_total']
                                    ))
    email = EmailMultiAlternatives(subject=subject, body=message, to=[order.email])
    email.attach_alternative(message, 'text/html')
    email.send()
