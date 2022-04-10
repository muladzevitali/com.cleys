from django.urls import path

from apps.order import views

urlpatterns = [
    path('', views.OrderView.as_view(), name='order'),
    path('payment/<str:order_number>', views.OrderPaymentView.as_view(), name='order-payment'),
    path('post-payment/<str:order_number>', views.post_payment, name='order-post-payment'),
    path('summary/', views.order_index, name='orders-summary'),
    path('order/', views.OrderListView.as_view(), name='order-list'),
    path('order/<pk>', views.OrderDetailView.as_view(), name='order-detail'),
    path('invoice/<pk>', views.order_invoice, name='order-invoice'),

]
