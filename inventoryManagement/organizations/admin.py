from django.contrib import admin
from .models import Warehouses, Stores, Addresses, Organizations

# Register your models here.
admin.site.register(Warehouses)
admin.site.register(Stores)
admin.site.register(Addresses)
admin.site.register(Organizations)