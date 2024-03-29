from django.conf import settings
from django.shortcuts import reverse
from mollie.api.client import Client


class MollieClient:
    def __init__(self):
        self.__client = Client()
        self.__client.set_api_key(settings.MOLLIE_CLIENT_API)

    @staticmethod
    def __redirect_url(request, order_number):
        return request.build_absolute_uri(reverse('order-post-payment', args=(order_number,)))

    def __enter__(self):
        return self

    def __exit__(self, exc_type, exc_val, exc_tb):
        return

    def create_payment(self, request, order):
        metadata = dict(order_number=order.order_number, first_name=order.first_name,
                        last_name=order.last_name, email=order.email)

        payment = self.__client.payments.create(
            {
                "amount": {"currency": "EUR", "value": f'{float(order.order_total):0.2f}'},
                "description": order.address,
                "redirectUrl": self.__redirect_url(request, order.order_number),
                "metadata": metadata,
            }
        )
        return payment

    def get_payment_status(self, payment_id):
        payment = self.__client.payments.get(payment_id)

        return payment.status