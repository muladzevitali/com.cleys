from django.urls import path
from apps.user import views


urlpatterns = [
    path('', views.ClientView.as_view(), name='registration'),
    path('login/', views.ClientLoginView.as_view(), name='login'),
    path('logout/', views.ClientLogoutView.as_view(), name='logout'),
    path('password_reset/', views.PasswordResetView.as_view(), name='password_reset'),
    path('update_client/', views.UpdateClientView.as_view(), name='update_client'),
    path('update-client-address/', views.UpdateClientAddressView.as_view(), name='update-client-address'),
    path('update-client-contact/', views.UpdateContactDetailView.as_view(), name='update-client-contact'),
    path('update-client-login/', views.UpdateLoginDetailView.as_view(), name='update-client-login'),
]
