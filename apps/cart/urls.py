from django.urls import path

from apps.cart import views

urlpatterns = [
    path('', views.index, name='cart-index'),
    path('add/<uuid:product_uuid>', views.add_to_cart, name='cart-add'),
    path('remove-item/<int:cart_item_id>', views.remove_cart_item, name='cart-remove-item'),
    path('increment-item-quantity/<int:cart_item_id>', views.increment_cart_item_quantity,
         name='cart-increment-item'),
    path('decrement-item-quantity/<int:cart_item_id>', views.decrement_cart_item_quantity,
         name='cart-decrement-item'),
    path('activate-promo-code/', views.PromoCodeActivationFormView.as_view(),
         name='cart-activate-promo-code'),
]
