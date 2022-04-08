from django.urls import path
from apps.user.views import ClientView, ClientLoginView, ClientLogoutView, \
    PasswordResetView, UpdateClientView, UpdateCompanyDetailsView


urlpatterns = [
    path('', ClientView.as_view(), name='registration'),
    path('login/', ClientLoginView.as_view(), name='login'),
    path('logout/', ClientLogoutView.as_view(), name='logout'),
    path('password_reset/', PasswordResetView.as_view(), name='password_reset'),
    path('update_client/', UpdateClientView.as_view(), name='update_client'),
    path('update_details/', UpdateCompanyDetailsView.as_view(), name='update_details'),
]
