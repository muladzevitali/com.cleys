from django.contrib.sessions.backends.db import SessionStore as DbSessionStore

from apps.cart.models import Cart


class SessionStore(DbSessionStore):
    def cycle_key(self):
        old_session_key = super(SessionStore, self).session_key
        super(SessionStore, self).cycle_key()
        self.save()
        Cart.objects.filter(cart_id=old_session_key).update(cart_id=self.session_key)
