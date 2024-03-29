from django.urls import path

from apps.faq import views

urlpatterns = [
    path('', views.FAQListView.as_view(), name='faq-index'),
    path('<slug:category_slug>/', views.FAQListView.as_view(), name='faq-by-category'),
]

contact_url_patterns = [
    path('', views.ContactFormView.as_view(), name='contact'),
]
