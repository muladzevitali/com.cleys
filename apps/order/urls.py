from django.urls import path

from apps.order import views

urlpatterns = [
    path('', views.OrderView.as_view(), name='order-index'),
    path('payment/<str:order_number>', views.OrderPaymentView.as_view(), name='order-payment'),
    path('post-payment/<str:order_number>', views.post_payment, name='order-post-payment'),
]