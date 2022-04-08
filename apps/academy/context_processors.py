from apps.academy import models


def academy_categories(request):
    if 'academy' not in request.path:
        return dict()

    categories = models.AcademyCategory.objects.all()

    return dict(academy_categories=categories)
