from django import template

register = template.Library()


@register.filter(name='has_parent')
def has_parent(things, parent):
    return things.filter(parent=parent)
