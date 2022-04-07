from django import forms

from .models import User


class RegisterForm(forms.ModelForm):
    password = forms.PasswordInput()

    class Meta:
        model = User
        fields = ["company_name", "vat_number", "street_name", "house_number", "postal_code", "township", "country",
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
