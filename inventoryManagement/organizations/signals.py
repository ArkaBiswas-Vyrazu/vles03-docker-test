from django.db.models.signals import post_save
from django.dispatch import receiver
from .models import Organizations, Warehouses, Stores


@receiver(post_save, sender = Warehouses)
def create_organization_on_warehouse_create(sender, created, instance, **kwargs):

    if created:
        Organizations.objects.create(entity_id = instance.warehouse_id, entity_type = 1)


@receiver(post_save, sender = Stores)
def create_organization_on_store_create(sender, created, instance, **kwargs):

    if created:
        Organizations.objects.create(entity_id = instance.store_id, entity_type = 2)