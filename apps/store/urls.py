from django.urls import path

from apps.store import views

urlpatterns = [
    path('', views.StoreListView.as_view(), name='store-index'),
    path('category/<slug:category_slug>/', views.StoreListView.as_view(), name='store-products-by-category'),
    path('category/<slug:category_slug>/<slug:slug>/<uuid:product_uuid>', views.ProductDetailView.as_view(),
         name='store-product-detail'),
    path('product/<uuid:product_uuid>/', views.calculate_required_product_volume,
         name='store-product-quantity-calculation'),

]
