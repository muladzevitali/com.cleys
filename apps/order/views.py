from django.contrib.auth.decorators import login_required
from django.db.models import Q
from django.http import HttpResponse
from django.shortcuts import (redirect, render, get_object_or_404, reverse)
from django.template.loader import render_to_string
from django.views.generic import (FormView, View, ListView, DetailView)

from apps.cart.utils import get_cart_info
from apps.order import (forms, models, helpers, utils)


class OrderView(FormView):
    template_name = 'order.html'
    form_class = forms.OrderForm
    success_url = 'order-payment'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        cart_info = get_cart_info(self.request)
        if not cart_info['cart_items']:
            return redirect('store-index')

        context.update(cart_info)
        return context

    def form_invalid(self, form):
        super().form_invalid(form)

    def form_valid(self, form):
        cart_info = get_cart_info(self.request)
        order = form.save(commit=False)
        order.order_total = cart_info['total']
        order.order_grand_total = cart_info['grand_total']
        order.tax = cart_info['tax']
        order.ip = self.request.META.get('REMOTE_ADDR')
        if self.request.user.is_authenticated:
            order.user = self.request.user
        order.save()

        return redirect(self.success_url, order_number=order.order_number)


class OrderPaymentView(View):
    template_name = 'payment.html'
    model = models.Order

    def get(self, request, order_number: str):
        order = get_object_or_404(self.model, order_number=order_number)
        cart_info = get_cart_info(request)

        context = dict(order=order, **cart_info)
        return render(request, self.template_name, context=context)

    def post(self, request, order_number):
        order = get_object_or_404(self.model, order_number=order_number)

        with helpers.MollieClient() as client:
            payment_meta = client.create_payment(request, order)

        _ = models.Payment.from_meta(payment_meta, order)

        return redirect(payment_meta.checkout_url)


class OrderListView(ListView):
    model = models.Order
    template_name = 'orders-list.html'
    paginate_by = 10

    def get_queryset(self):
        queryset = self.model.objects.filter(user=self.request.user)
        return queryset


class OrderDetailView(DetailView):
    model = models.Order
    template_name = 'order-detail.html'


def post_payment(request, order_number):
    order = get_object_or_404(models.Order, order_number=order_number)
    payment = order.order_payments.first()
    with helpers.MollieClient() as client:
        status = client.get_payment_status(payment.payment_id)

    if not status == 'paid':
        order.status = models.Order.OrderStatusChoices.CANCELED
        order.save()
        return redirect(reverse('order-index'))

    cart_info = get_cart_info(request)
    utils.finalize_order(request, order, payment, cart_info['cart_items'])
    utils.notify_on_completion(request, order, cart_info)

    cart_info['cart'].clear()

    context = dict(order=order)
    return render(request, 'payment-success.html', context=context)


@login_required
def order_index(request):
    recent_orders = models.Order.objects.filter(~Q(status=models.Order.OrderStatusChoices.NEW),
                                                user=request.user) \
                        .all().order_by('-pk')[:6]
    recent_order_products = models.OrderProduct.objects.filter(~Q(order__status=models.Order.OrderStatusChoices.NEW),
                                                               order__user=request.user).all().order_by('-pk')[:6]
    context = dict(recent_orders=recent_orders, recent_order_products=recent_order_products)
    return render(request, 'orders-index.html', context=context)


def order_invoice(request, pk: int):
    import weasyprint

    order = get_object_or_404(models.Order, pk=pk)
    html = render_to_string('order-invoice.html', {'object': order})
    response = HttpResponse(content_type='application/pdf')
    response['Content-Disposition'] = 'filename="order_{}.pdf"'.format(order.id)
    weasyprint.HTML(string=html).write_pdf(response)
    return response
