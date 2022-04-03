from django import forms
from django.contrib.auth.forms import UserCreationForm
from .models import ClientRegister


class RegisterForm(forms.ModelForm):
    class Meta:
        model = ClientRegister
        fields = ["company_name", "vat_number", "street_name", "house_number", "postal_code", "township", "country",
                  "name", "first_name", "phone_number", "email", "password"]
        widgets = {
            'password': forms.PasswordInput()
        }
