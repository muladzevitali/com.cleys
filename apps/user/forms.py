from django import forms

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


class UpdateCompanyDetailsForm(forms.Form):
    company_name = forms.CharField(max_length=256)
    vat_number = forms.CharField(max_length=256)
    street_name = forms.CharField(max_length=256)
    house_number = forms.CharField(max_length=256)
    postal_code = forms.CharField(max_length=256)
    township = forms.CharField(max_length=256)
    country = forms.CharField(max_length=256)


class UpdateContactDetailsForm(forms.Form):
    last_name = forms.CharField(max_length=256)
    first_name = forms.CharField(max_length=256)
    phone_number = forms.CharField(max_length=256)


class UpdateLoginDetailsForm(forms.Form):
    email = forms.EmailField()
    password = forms.CharField(widget=forms.PasswordInput())
