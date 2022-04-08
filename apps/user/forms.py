from django import forms
from django.core.validators import MinLengthValidator

from .models import User


class RegisterForm(forms.ModelForm):
    password = forms.PasswordInput()

    class Meta:
        model = User
        fields = ["company_name", "vat_number", "street_name", "house_number", "postal_code", "city", "country",
                  "last_name", "first_name", "phone_number", "email", "password"]
        widgets = {
            'password': forms.PasswordInput()
        }

    def save(self, commit=True):
        user = super().save(commit=False)
        user.set_password(self.cleaned_data['password'])
        if commit:
            user.save()
        return user


class UpdateAddressDetailsForm(forms.ModelForm):
    class Meta:
        model = User
        fields = ('company_name', 'vat_number', 'street_name', 'house_number', 'postal_code', 'city', 'country')


class UpdateContactDetailsForm(forms.ModelForm):
    class Meta:
        model = User
        fields = ('last_name', 'first_name', 'phone_number')


class UpdateLoginDetailsForm(forms.ModelForm):
    password = forms.CharField(widget=forms.PasswordInput(), validators=(MinLengthValidator(8),))

    class Meta:
        model = User
        fields = ('email', 'password',)
