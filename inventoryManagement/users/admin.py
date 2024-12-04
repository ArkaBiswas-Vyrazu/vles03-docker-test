from django.contrib import admin
from .models import User, Email_Otp
# Register your models here.

admin.site.register(User)
admin.site.register(Email_Otp)