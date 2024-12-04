from django.contrib.auth import user_logged_in
from django.dispatch import receiver
from .models import LoginActivity
from django.utils import timezone

@receiver(user_logged_in)
def create_login_activity(sender, user, request, **kwargs):
    LoginActivity.objects.create(user=user, login_time=timezone.now())