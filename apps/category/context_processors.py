from apps.category.models import Category


def categories_list(request):
    categories = Category.objects.filter(parent=None).all()
    return dict(categories=categories)
