from django.core.management import call_command
from django.core.management.base import BaseCommand
from django.db.models import ObjectDoesNotExist

from apps.user.models import User, UserManager


class Command(BaseCommand):
    """Command for initializing data to user app: user"""
    help = 'Initialize default data: admin_user'

    def handle(self, *args, **options):
        call_command('loaddata', 'media/initial_data/categories.json')
        call_command('loaddata', 'media/initial_data/products.json')
        call_command('loaddata', 'media/initial_data/products_gallery.json')
        call_command('loaddata', 'media/initial_data/products_variations.json')
        call_command('loaddata', 'media/initial_data/countries.json')
        call_command('loaddata', 'media/initial_data/faq_categories.json')
        call_command('loaddata', 'media/initial_data/faq.json')
        call_command('loaddata', 'media/initial_data/inspirations.json')
        call_command('loaddata', 'media/initial_data/inspiration_gallery.json')
        call_command('loaddata', 'media/initial_data/academy_categories.json')
        call_command('loaddata', 'media/initial_data/academies.json')
        self._create_admin_if_not_exist()

    def _create_admin_if_not_exist(self):
        admin_email = 'admin@example.com'
        admin_name = 'admin'

        try:
            admin = User.objects.get(email=admin_email, is_staff=True)

            self.stdout.write(self.style.SUCCESS(f'Administrator {admin} already exists'))
        except ObjectDoesNotExist:
            user_manager = UserManager()
            user_manager.model = User
            admin_data = dict(
                email=admin_email,
                password="admin1234",
                first_name=admin_name,
                last_name=admin_name,
                username='admin',
                company_name='cley',
                vat_number='000000',
                street_name='House',
                house_number='12',
                city='Warsaw',
                postal_code='1122',
                country_id=1,
                phone_number='00000'
            )

            user_manager.create_superuser(**admin_data)

            self.stdout.write(
                self.style.SUCCESS(f"Administrator {admin_data['email']}  with password '{admin_data['password']}'")
            )
