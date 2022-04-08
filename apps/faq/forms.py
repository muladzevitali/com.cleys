from django import forms
from apps.user import models
from django.core.mail import EmailMessage
from django.conf import settings
from django.template.loader import render_to_string


class ContactForm(forms.ModelForm):
    class Meta:
        model = models.ContactModel
        fields = ["company_name", "vat_number", "last_name", "first_name", "phone_number", "email", "subject",
                  'message']

    def send_email(self):
        subject = 'Contact via Cleys'
        mail_text = self.cleaned_data.get('message', '')
        # message = render_to_string('contact.html', self.cleaned_data)
        email = EmailMessage(subject, mail_text, to=[settings.EMAIL_CONTACT_FORM_RECEIVER])
        email.send()
