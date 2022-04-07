from django import forms
from django.core import validators

from apps.cart.models import PromoCode


class AddToCartForm(forms.Form):
    quantity = forms.IntegerField(validators=[validators.MinValueValidator(0, 'quantity must be non negative')])
    variation = forms.IntegerField(required=False)


class PromoCodeActivationForm(forms.Form):
    code = forms.CharField()

    def clean_code(self):
        code = self.cleaned_data['code']
        if not PromoCode.objects.filter(code=code.lower()).exists():
            raise validators.ValidationError('Invalid code')

        return code
