from django.shortcuts import (render)


def place_order(request):
    return render(request, 'order.html')
