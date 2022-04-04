import decimal
from pathlib import Path

from config.env import env

BASE_DIR = Path(__file__).resolve().parent.parent

SECRET_KEY = env('DJANGO_SECRET_KEY')
CONTEXT = decimal.getcontext()
CONTEXT.prec = 2

DEBUG = env.bool('DJANGO_DEBUG')

ALLOWED_HOSTS = env.list('DJANGO_ALLOWED_HOSTS')


INSTALLED_APPS = [
    'django.contrib.admin',
    'django.contrib.auth',
    'django.contrib.contenttypes',
    'django.contrib.sessions',
    'django.contrib.messages',
    'django.contrib.staticfiles',
    'ckeditor',
    'apps.user',
    'apps.category',
    'apps.store',
    'apps.cart',
    'apps.order',
    'apps.faq',

]

MIDDLEWARE = [
    'django.middleware.security.SecurityMiddleware',
    'django.contrib.sessions.middleware.SessionMiddleware',
    'django.middleware.common.CommonMiddleware',
    'django.middleware.csrf.CsrfViewMiddleware',
    'django.contrib.auth.middleware.AuthenticationMiddleware',
    'django.contrib.messages.middleware.MessageMiddleware',
    'django.middleware.clickjacking.XFrameOptionsMiddleware',
]

ROOT_URLCONF = 'config.urls'

TEMPLATES = [
    {
        'BACKEND': 'django.template.backends.django.DjangoTemplates',
        'DIRS': [BASE_DIR / 'templates'],
        'APP_DIRS': True,
        'OPTIONS': {
            'context_processors': [
                'django.template.context_processors.debug',
                'django.template.context_processors.request',
                'django.contrib.auth.context_processors.auth',
                'django.contrib.messages.context_processors.messages',
                'apps.category.context_processors.categories_list',
                'apps.cart.context_processors.cart_item_counter',
            ],
        },
    },
]

WSGI_APPLICATION = 'config.wsgi.application'

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.sqlite3',
        'NAME': BASE_DIR / 'media/db/db.sqlite3',
    }
}

AUTH_PASSWORD_VALIDATORS = [
    {
        'NAME': 'django.contrib.auth.password_validation.UserAttributeSimilarityValidator',
    },
    {
        'NAME': 'django.contrib.auth.password_validation.MinimumLengthValidator',
    },
    {
        'NAME': 'django.contrib.auth.password_validation.CommonPasswordValidator',
    },
    {
        'NAME': 'django.contrib.auth.password_validation.NumericPasswordValidator',
    },
]
AUTH_USER_MODEL = "user.User"

LANGUAGE_CODE = 'nl'

TIME_ZONE = 'UTC'

USE_I18N = True

USE_L10N = True

USE_TZ = True

STATIC_URL = 'static/'
STATICFILES_DIRS = (BASE_DIR.joinpath('config/static'),)
STATIC_ROOT = BASE_DIR.joinpath('static')
MEDIA_ROOT = BASE_DIR.joinpath('media')
MEDIA_URL = 'media/'
CKEDITOR_BASEPATH = "/static/ckeditor/ckeditor/"
CKEDITOR_ALLOW_NONIMAGE_FILES = False
CKEDITOR_CONFIGS = {
    'default': {
        'toolbar': 'Custom',
        'skin': 'moono',
        'toolbar_Custom': [
            ['Bold', 'Italic', 'Underline', 'BGColor', 'TextColor', 'FontSize'],
            ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'JustifyLeft',
             'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
            ['Link', 'Unlink'],
            ['RemoveFormat', 'Source']
        ],
    }
}
DEFAULT_AUTO_FIELD = 'django.db.models.BigAutoField'
EMAIL_HOST = env('EMAIL_HOST')
EMAIL_PORT = env.int('EMAIL_PORT')
EMAIL_HOST_USER = env('EMAIL_HOST_USER')
EMAIL_HOST_PASSWORD = env('EMAIL_HOST_PASSWORD')
EMAIL_USE_TLS = env.bool('EMAIL_USE_TLS')
EMAIL_CONTACT_FORM_RECEIVER = env('EMAIL_CONTACT_FORM_RECEIVER')

MOLLIE_CLIENT_API = env('MOLLIE_CLIENT_API')
TAX = round(decimal.Decimal(env.float('TAX'), CONTEXT), 2)
