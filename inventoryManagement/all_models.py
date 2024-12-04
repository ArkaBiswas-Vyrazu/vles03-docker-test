# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey and OneToOneField has `on_delete` set to the desired behavior
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class Addresses(models.Model):
    address_line_one = models.CharField(max_length=255, blank=True, null=True)
    address_line_two = models.CharField(max_length=255, blank=True, null=True)
    cities = models.ForeignKey('Cities', models.DO_NOTHING)
    countries = models.ForeignKey('Countries', models.DO_NOTHING)
    pin_code = models.CharField(max_length=45, blank=True, null=True)
    status = models.IntegerField()
    address_id = models.CharField(max_length=255)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'addresses'
        unique_together = (('id', 'cities', 'countries'),)


class Attributes(models.Model):
    item_attribute_sets = models.ForeignKey('ItemAttributeSets', models.DO_NOTHING)
    item_attributes = models.ForeignKey('ItemAttributes', models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'attributes'
        unique_together = (('id', 'item_attribute_sets', 'item_attributes'),)


class Cities(models.Model):
    countries = models.ForeignKey('Countries', models.DO_NOTHING)
    name = models.CharField(max_length=255)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    status = models.IntegerField()
    cities_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'cities'
        unique_together = (('id', 'countries'),)


class Countries(models.Model):
    name = models.CharField(max_length=255)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    status = models.IntegerField()
    countries_id = models.CharField(max_length=45)

    class Meta:
        managed = False
        db_table = 'countries'


class ItemAttributeSets(models.Model):
    name = models.CharField(max_length=255)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'item_attribute_sets'


class ItemAttributes(models.Model):
    name = models.CharField(max_length=255)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'item_attributes'


class Organizations(models.Model):
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    users = models.ForeignKey('Users', models.DO_NOTHING)
    status = models.IntegerField()
    organization_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'organizations'
        unique_together = (('id', 'users'),)


class ProductionOrders(models.Model):
    order_id = models.CharField(max_length=255)
    warehouses = models.ForeignKey('Warehouses', models.DO_NOTHING)
    warehouse_items = models.ForeignKey('WarehouseItems', models.DO_NOTHING)
    quantity = models.IntegerField()
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'production_orders'


class Roles(models.Model):
    name = models.CharField(max_length=50)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    roles_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'roles'


class Sales(models.Model):
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    status = models.IntegerField()
    items = models.ForeignKey('SalesItems', models.DO_NOTHING)
    sales_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'sales'
        unique_together = (('id', 'items'),)


class SalesItemCategories(models.Model):
    name = models.CharField(max_length=255)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    categories_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'sales_item_categories'


class SalesItems(models.Model):
    categories = models.ForeignKey(SalesItemCategories, models.DO_NOTHING)
    name = models.CharField(max_length=255, blank=True, null=True)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    item_attribute_sets = models.ForeignKey(ItemAttributeSets, models.DO_NOTHING)
    sales_items_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'sales_items'
        unique_together = (('id', 'categories', 'item_attribute_sets'),)


class Stores(models.Model):
    name = models.CharField(max_length=255)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    addresses = models.ForeignKey(Addresses, models.DO_NOTHING)
    organizations = models.ForeignKey(Organizations, models.DO_NOTHING)
    status = models.IntegerField()
    short_code = models.CharField(max_length=45)
    store_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'stores'
        unique_together = (('id', 'addresses', 'organizations'),)


class Users(models.Model):
    addresses = models.ForeignKey(Addresses, models.DO_NOTHING)
    first_name = models.CharField(max_length=255)
    last_name = models.CharField(max_length=255)
    email = models.CharField(max_length=255)
    password = models.CharField(max_length=255)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    user_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'users'
        unique_together = (('id', 'addresses'),)


class UsersRoles(models.Model):
    users = models.ForeignKey(Users, models.DO_NOTHING)
    roles = models.ForeignKey(Roles, models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'users_roles'
        unique_together = (('id', 'users', 'roles'),)


class WarehouseItemCategories(models.Model):
    name = models.CharField(max_length=255)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.CharField(max_length=45)
    categories_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'warehouse_item_categories'


class WarehouseItems(models.Model):
    name = models.CharField(max_length=255)
    status = models.IntegerField()
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    warehouses = models.ForeignKey('Warehouses', models.DO_NOTHING)
    warehouse_item_categories = models.ForeignKey(WarehouseItemCategories, models.DO_NOTHING)
    item_attribute_sets = models.ForeignKey(ItemAttributeSets, models.DO_NOTHING)
    items_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'warehouse_items'
        unique_together = (('id', 'warehouses', 'warehouse_item_categories', 'item_attribute_sets'),)


class Warehouses(models.Model):
    name = models.CharField(max_length=255)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    created_by = models.IntegerField()
    updated_by = models.IntegerField()
    addresses = models.ForeignKey(Addresses, models.DO_NOTHING)
    organizations = models.ForeignKey(Organizations, models.DO_NOTHING)
    status = models.IntegerField()
    short_code = models.CharField(max_length=45)
    warehouse_id = models.CharField(max_length=255)

    class Meta:
        managed = False
        db_table = 'warehouses'
        unique_together = (('id', 'addresses', 'organizations'),)
