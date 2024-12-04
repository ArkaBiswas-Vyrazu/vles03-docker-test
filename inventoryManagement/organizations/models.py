from django.db import models
import uuid
from django.conf import settings

# Create your models here.

class TimeStampModel(models.Model):
    status = models.IntegerField(default = 1)
    created_at = models.DateTimeField(auto_now_add = True)
    updated_at = models.DateTimeField(auto_now = True)
    created_by = models.IntegerField(default = 1)
    updated_by = models.IntegerField(default = 1)

    class Meta:
        abstract = True


class Organizations(TimeStampModel):
    WH = 1
    ST = 2

    ENTITY_CHOICES = (
                        ('Warehouse', WH),
                        ('Store', ST)
                    )
    organization_id = models.UUIDField(primary_key = True, default = uuid.uuid4, editable = False)
    entity_id = models.UUIDField(blank = True, null = True)
    entity_type = models.IntegerField(blank = True, null = True)

    class Meta:
        db_table = 'organizations'

class Warehouses(TimeStampModel):
    warehouse_id = models.UUIDField(primary_key = True, default = uuid.uuid4, editable = False)
    warehouse_head = models.ForeignKey(settings.AUTH_USER_MODEL, models.DO_NOTHING)
    name = models.CharField(max_length=255)
    short_code = models.CharField(max_length=45)
    addresses = models.OneToOneField('Addresses', models.DO_NOTHING)

    class Meta:
        db_table = 'warehouses'
class Stores(TimeStampModel):

    CHOOSE_CURRENCY = 'CHOOSE_CURRENCY'
    INR = 'INR'
    USD = 'USD'

    CURRENCY_CHOICES = (
                        (CHOOSE_CURRENCY, 'Choose Currency'),
                        (INR, 'INR'),
                        (USD, 'USD'),
                    )

    store_id = models.UUIDField(primary_key = True, default = uuid.uuid4, editable = False)
    store_head = models.ForeignKey(settings.AUTH_USER_MODEL, models.DO_NOTHING)
    name = models.CharField(max_length=255)
    short_code = models.CharField(max_length=45)
    store_currency = models.CharField(max_length=45, choices = CURRENCY_CHOICES, default = INR)
    addresses = models.OneToOneField('Addresses', models.DO_NOTHING)

    class Meta:
        db_table = 'stores'

class Addresses(TimeStampModel):
    address_id = models.UUIDField(primary_key = True, default = uuid.uuid4, editable = False)
    entity_id = models.UUIDField(blank = True, null = True)
    entity_type = models.IntegerField(blank = True, null = True)
    address_line_one = models.CharField(max_length=255, blank=True, null=True)
    address_line_two = models.CharField(max_length=255, blank=True, null=True)
    city = models.CharField(max_length=255, blank=True, null=True)
    state = models.CharField(max_length=255, blank=True, null=True)
    country = models.CharField(max_length=255, blank=True, null=True)
    pin_code = models.CharField(max_length=6, blank=True, null=True)

    def __str__(self):
        return f'{self.address_line_one}, {self.address_line_two}, {self.city}, {self.state}, {self.country}, {self.pin_code}'
    
    class Meta:
        db_table = 'addresses'