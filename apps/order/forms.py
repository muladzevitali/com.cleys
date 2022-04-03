from django import forms

from apps.order.models import Order, Country


class OrderForm(forms.ModelForm):
    country = forms.ModelChoiceField(queryset=Country.objects.all())

    class Meta:
        model = Order
        fields = ('first_name', 'last_name', 'email', 'phone', 'company_name', 'vat_number', 'street_name',
                  'house_number', 'city', 'postal_code', 'country', 'order_type',)
