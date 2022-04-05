from django import forms

from .models import User


class RegisterForm(forms.ModelForm):
    class Meta:
        model = User
        fields = ["company_name", "vat_number", "street_name", "house_number", "postal_code", "township", "country",
                  "last_name", "first_name", "phone_number", "email", "password"]
        widgets = {
            'password': forms.PasswordInput()
        }
