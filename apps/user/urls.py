from django.urls import path
from apps.user.views import ClientView, ClientLoginView, ClientLogoutView


urlpatterns = [
    path('', ClientView.as_view(), name='registration'),
    path('login/', ClientLoginView.as_view(), name='login'),
    path('logout/', ClientLogoutView.as_view(), name='logout'),
]
