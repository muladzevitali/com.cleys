from django.conf import settings
from django.conf.urls.static import static
from django.contrib import admin
from django.urls import path, include

from apps.faq.urls import contact_url_patterns
from config import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.index, name='index'),
    path('store/', include('apps.store.urls')),
    path('cart/', include('apps.cart.urls')),
    path('order/', include('apps.order.urls')),
    path('faq/', include('apps.faq.urls')),
    path('contact/', include(contact_url_patterns))
]

urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
