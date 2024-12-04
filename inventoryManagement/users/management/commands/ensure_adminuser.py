from django.core.management.base import BaseCommand
from django.contrib.auth.hashers import make_password
from users.models import User
import os

# NOTE: This Command is meant for setting a new superuser to use in Docker Container

class Command(BaseCommand):
    help = "Creates a new superuser dockeradmin if it does not exist"

    def handle(self, *args, **options):
        if not User.objects.filter(email="dockeradmin@example.com",name="dockeradmin").exists():
            user = User.objects.create(
                name="dockeradmin",
                email="dockeradmin@example.com",
                password=make_password(os.environ['DJANGO_SUPERUSER_PASSWORD']),
                is_admin=True,
                is_superuser=True,
            )
            self.stdout.write(self.style.SUCCESS(f"User {user.name} with password {user.password} created"))