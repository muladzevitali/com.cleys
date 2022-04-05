from django.urls import path
from apps.user.views import ClientView, ClientLoginView, ClientLogoutView, PasswordResetView


urlpatterns = [
    path('', ClientView.as_view(), name='registration'),
    path('login/', ClientLoginView.as_view(), name='login'),
    path('logout/', ClientLogoutView.as_view(), name='logout'),
    path('password_reset/', PasswordResetView.as_view(), name='password_reset'),
]
