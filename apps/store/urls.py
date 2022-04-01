from django.urls import path

from apps.store import views

urlpatterns = [
    path('', views.StoreListView.as_view(), name='store-index'),
    path('category/<slug:category_slug>/', views.StoreListView.as_view(), name='store-products-by-category'),

]
