import secrets

from django.db import models
from django.db.models.signals import post_save
from model_utils.models import TimeStampedModel


class Country(TimeStampedModel):
    name = models.CharField(max_length=30)

    class Meta:
        verbose_name_plural = 'Countries'

    def __str__(self):
        return self.name


class Payment(TimeStampedModel):
    class PaymentStatusChoices(models.TextChoices):
        OPEN = 'open'
        FAILED = 'failed'
        PENDING = 'pending'
        PAID = 'paid'

    payment_id = models.CharField(max_length=100)
    payment_method = models.CharField(max_length=100, default='mollie')
    description = models.CharField(max_length=255, null=True, blank=True)
    checkout_url = models.URLField(null=True, blank=True)
    amount_paid = models.CharField(max_length=20)
    ccy = models.CharField(max_length=10)
    status = models.CharField(max_length=100, choices=PaymentStatusChoices.choices)
    order = models.ForeignKey('order.Order', on_delete=models.CASCADE, related_name='order_payments')

    @classmethod
    def from_meta(cls, meta, order):
        payment = cls()
        payment.payment_id = meta.id
        payment.description = meta.description
        payment.checkout_url = meta.checkout_url
        payment.status = meta.status
        payment.amount_paid = meta.amount["value"]
        payment.ccy = meta.amount['currency']
        payment.order = order
        payment.save()
        return payment

    def __str__(self):
        return f'{self.payment_id}'


class Order(TimeStampedModel):
    class OrderStatusChoices(models.TextChoices):
        NEW = 'new'
        ACCEPTED = 'accepted'
        COMPLETED = 'completed'
        CANCELED = 'canceled'

    class OrderTypeChoices(models.TextChoices):
        IN_STORE = 'in_store'
        DELIVERY = 'delivery'

    order_number = models.CharField(max_length=50)

    first_name = models.CharField(max_length=50)
    last_name = models.CharField(max_length=50)
    phone = models.CharField(max_length=15)
    email = models.EmailField()
    company_name = models.CharField(max_length=100, null=True, blank=True)
    vat_number = models.CharField(max_length=100, null=True, blank=True)
    street_name = models.CharField(max_length=400)
    house_number = models.CharField(max_length=100)
    city = models.CharField(max_length=100)
    postal_code = models.CharField(max_length=20)
    country = models.ForeignKey('order.Country', on_delete=models.CASCADE, related_name='country_client_orders')

    order_type = models.CharField(max_length=50, choices=OrderTypeChoices.choices)
    order_note = models.TextField(null=True, blank=True)
    order_grand_total = models.DecimalField(max_digits=8, decimal_places=2)
    order_total = models.DecimalField(max_digits=8, decimal_places=2)
    tax = models.DecimalField(max_digits=8, decimal_places=2)
    status = models.CharField(max_length=10, choices=OrderStatusChoices.choices, default=OrderStatusChoices.NEW)

    user = models.ForeignKey('user.User', on_delete=models.DO_NOTHING, related_name='orders', null=True, blank=True)
    ip = models.CharField(max_length=20, blank=True)
    is_ordered = models.BooleanField(default=False)

    @property
    def full_name(self):
        return f'{self.first_name} {self.last_name}'

    @property
    def address(self):
        return f'{self.country.name}, {self.city}, {self.street_name}, {self.house_number}'

    def __str__(self):
        return f'Order({self.id}) - {self.order_number}'

    @staticmethod
    def create_order_id(sender, instance: 'Order', **kwargs):
        if instance.order_number:
            return

        instance.order_number = f'ORD-{secrets.token_hex(5).upper()}'
        instance.save()


class OrderProduct(TimeStampedModel):
    order = models.ForeignKey('order.Order', on_delete=models.CASCADE, related_name='order_products')
    product = models.ForeignKey('store.Product', on_delete=models.CASCADE, related_name='product_orders')
    variation = models.ForeignKey('store.ProductVariation', on_delete=models.DO_NOTHING, related_name='order_products',
                                  blank=True, null=True)
    user = models.ForeignKey('user.User', on_delete=models.DO_NOTHING, related_name='order_products', null=True,
                             blank=True)
    quantity = models.SmallIntegerField()
    product_price = models.DecimalField(max_digits=8, decimal_places=2)
    is_ordered = models.BooleanField(default=False)

    class Meta:
        verbose_name = 'Order product'
        verbose_name_plural = 'Order products'

    @property
    def total(self):
        return self.quantity * self.product_price

    def __str__(self):
        return f'{self.order} - {self.product}'


post_save.connect(Order.create_order_id, sender=Order)
