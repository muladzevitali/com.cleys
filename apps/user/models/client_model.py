from django.db import models
from django.contrib.auth.hashers import make_password


class ClientRegister(models.Model):
    COUNTRY_CHOICES = (('be', 'België'), ('nl', 'Netherland'))
    company_name = models.CharField(max_length=150, null=True)
    vat_number = models.CharField(max_length=150)
    street_name = models.CharField(max_length=100)
    house_number = models.CharField(max_length=50)
    postal_code = models.CharField(max_length=10)
    township = models.CharField(max_length=50)
    country = models.CharField(max_length=10, choices=COUNTRY_CHOICES)

    name = models.CharField(max_length=25)
    first_name = models.CharField(max_length=25)
    phone_number = models.CharField(max_length=25)

    email = models.EmailField(max_length=25)
    password = models.CharField(max_length=20)

    username = None
    USERNAME_FIELD = "email"
    REQUIRED_FIELDS = []

    def __str__(self):
        return str(self.name) + ' ' + str(self.first_name)

    def save(self, *args, **kwargs):
        self.password = make_password(self.password)
        super(ClientRegister, self).save(*args, **kwargs)

    class Meta:
        db_table = 'client'
        verbose_name = 'Client'
        verbose_name_plural = 'Clients'
