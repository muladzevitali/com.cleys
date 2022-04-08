from django.urls import path

from apps.academy import views

urlpatterns = [
    path('', views.AcademyListView.as_view(), name='academy-list'),
    path('<slug:category_slug>', views.AcademyListView.as_view(), name='academy-list-by-category'),
    path('<slug:category_slug>/<pk>', views.AcademyDetailView.as_view(), name='academy-detail'),
]
