from django.urls import path

from apps.inspiration import views

urlpatterns = [
    path('', views.InspirationListView.as_view(), name='inspiration-list'),
    path('<pk>', views.InspirationDetailView.as_view(), name='inspiration-detail'),
]
