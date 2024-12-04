from django.db import models
from django.contrib.auth.models import AbstractBaseUser, BaseUserManager, PermissionsMixin
from django.conf import settings
from django.utils import timezone

# Could implement address validation using Google API, although it is a paid feature
class Addresses(models.Model):
    """ Represents different addresses for different entities"""
    
    address_line_one = models.CharField(max_length=255,unique=True)
    address_line_two = models.CharField(max_length=255)
    country = models.CharField(max_length=255)
    state = models.CharField(max_length=255)
    city = models.CharField(max_length=255)
    pincode = models.IntegerField()
    status = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'addresses'

class Organizations(models.Model):
    name = models.CharField(max_length=255)
    short_code = models.CharField(max_length=255, blank=False)
    address = models.OneToOneField(Addresses, on_delete=models.CASCADE)
    status = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'organizations'


class UserManager(BaseUserManager):
    def create_user(self, email, name, password, **extra_fields):
        if not email:
            raise ValueError('Users must have an email address.')
        user = self.model(email=self.normalize_email(email), name=name, **extra_fields)
        user.set_password(password)
        user.save(using=self._db)

        return user

    def create_superuser(self, email, name, password):
        user = self.create_user(email, name, password)
        user.is_admin = True
        user.is_superuser = True
        user.save(using=self._db)

        return user

class User(AbstractBaseUser, PermissionsMixin):
    email = models.EmailField(max_length=255, unique=True)
    name = models.CharField(max_length=255)
    last_activity = models.DateTimeField(auto_now=True, blank=True, null=True)
    is_admin = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True, blank=True, null=True)
    updated_at = models.DateTimeField(auto_now=True)
    otl_session_id = models.CharField(max_length=255, blank=True, null=True)
    ip_lock_address = models.CharField(max_length=255, blank=True, null=True)
    is_active = models.BooleanField(default=True)
    organization = models.ForeignKey(Organizations,on_delete=models.CASCADE)

    objects = UserManager()

    USERNAME_FIELD = "email"
    REQUIRED_FIELDS = ["name"]

    @property
    def is_staff(self):
        return self.is_admin

    def __str__(self):
        return self.email

    class Meta:
        db_table = "users"

class Warehouses(models.Model):
    """ Represents warehouses owned by organizations"""

    name = models.CharField(max_length=255)
    short_code = models.CharField(max_length=255,blank=False)
    organization = models.ForeignKey(Organizations,on_delete=models.CASCADE) #Organization can have multiple warehouses
    address = models.OneToOneField(Addresses,on_delete=models.CASCADE)
    max_quantity = models.IntegerField()
    head_person = models.CharField(max_length=255) #Assuming there is no Staff table, in which case head person would be a foreign key
    phone = models.IntegerField(max_length=10) #For better phone number field, we could use django-phonenumber-field
    email = models.EmailField()
    status = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'warehouses'

class Hubs(models.Model):
    """ Represents hubs/stores owned by organizations"""

    name = models.CharField(max_length=255)
    short_code = models.CharField(max_length=255,blank=False)
    organization = models.ForeignKey(Organizations, on_delete=models.CASCADE) #Organization can have multiple hubs
    address = models.OneToOneField(Addresses,on_delete=models.CASCADE)
    max_quantity = models.IntegerField()
    currency = models.CharField(max_length=3) #Assuming hub can accept only one currency #May not be required #Could use django-money for better currency fields
    head_person = models.CharField(max_length=255)
    phone = models.IntegerField(max_length=10)
    email = models.EmailField()
    status = models.BooleanField(default=True)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'hubs'

class Vendors(models.Model):
    """ Represents the suppliers for inventory items"""

    name = models.CharField(max_length=255)
    organization = models.ForeignKey(Organizations,on_delete=models.CASCADE) #Organization can have multiple vendors
    email = models.EmailField()
    phone = models.IntegerField(max_length=10)
    contact_person = models.CharField(max_length=255)
    designation = models.CharField(max_length=255)
    website_url = models.URLField(blank=True)
    address = models.OneToOneField(Addresses,on_delete=models.CASCADE)
    status = models.BooleanField(default=True)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()

    class Meta:
        db_table = 'vendors'

class BusinessCustomers(models.Model):
    """ Represents the customers to whom product is sold
        Note: Customers are generalized in this context
    """

    company_name = models.CharField(max_length=255)
    industry = models.CharField(max_length=255)
    registration_number = models.CharField(max_length=255)
    website_url = models.URLField(blank=True)
    billing_address = models.CharField(max_length=255) # Not storing address as it is not required
    shipping_address = models.CharField(max_length=255)
    organization = models.ForeignKey(Organizations,on_delete=models.CASCADE) #Organizations can have mutiple customers

    class Meta:
        db_table = 'business_customers'

class InventoryItems(models.Model):
    """ Represents raw materials owned by organization that are needed for product assembly"""

    serial_no = models.CharField(max_length=255,unique=True)
    name = models.CharField(max_length=255)
    description = models.TextField(blank=True)
    vendor = models.ForeignKey(Vendors,on_delete=models.CASCADE) #Vendors can supply multiple inventory items
    organization = models.ForeignKey(Organizations,on_delete=models.CASCADE) #Organization can have multiple inventory items
    warehouse = models.ForeignKey(Warehouses,on_delete=models.CASCADE) #Warehouse where it is stored
    quantity = models.IntegerField()
    expiry_date = models.DateTimeField()
    price = models.DecimalField(max_digits=11,decimal_places=2) #For better price fields, use django-money
    reorder_point = models.IntegerField() #If quantity reaches this point, user would be alerted to buy more stock 

    AVAILABILITY_STATUS_CHOICES = [
        ("SCI","Stock Coming"),
        ("OOS","Out of Stock"),
        ("IS","In Stock"),
    ]
    availability_status = models.CharField(max_length=20,
                                           choices=AVAILABILITY_STATUS_CHOICES,
                                           default="In Stock")
    expiry_status = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'inventory_items'

class Products(models.Model):
    """ Represents products owned by organization that are sold to customers"""

    serial_no = models.CharField(max_length=255,unique=True)
    name = models.CharField(max_length=255)
    description = models.TextField(blank=True)
    organization = models.ForeignKey(Organizations,on_delete=models.CASCADE) #Organization can have multiple products
    hub = models.ForeignKey(Hubs,on_delete=models.CASCADE) #Multiple hubs can store the same product # Should verify this relation
    quantity = models.IntegerField()
    price = models.DecimalField(max_digits=11,decimal_places=2)
    expiry_date = models.DateTimeField()
    reorder_point = models.IntegerField()
    manufacturer = models.CharField(max_length=255,blank=True)
    
    AVAILABILITY_STATUS_CHOICES = [
        ("SCI","Stock Coming"),
        ("OOS","Out of Stock"),
        ("IS","In Stock"),
        ("SO","Sold Out"),
    ]
    availability_status = models.CharField(max_length=20,
                                           choices=AVAILABILITY_STATUS_CHOICES,
                                           default="In Stock")
    expiry_status = models.BooleanField(default=False)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'products'

class ProductDetails(models.Model):
    """ 
        Represents the inventory items that were used for product assembly
        On Successful product assembly, we make entries to this table and
        update quantities in the InventoryItems table
    """

    inventory_item_id = models.BigIntegerField() #Not storing the actual inventory item object
    product = models.ForeignKey(Products,on_delete=models.CASCADE)
    quantity_used = models.IntegerField()

    def save(self, *args, **kwargs):
        # Assuming that lookups were made to check that the required quantity was available in inventory
        inventory_item = InventoryItems.objects.get(id=self.inventory_item_id)
        inventory_item.quantity = inventory_item.quantity - self.quantity_used
        inventory_item.save()
        return super().save(*args, **kwargs)

    class Meta:
        db_table = 'product_details'

class Payments(models.Model):
    """ Represents different payments made/received by organizations """

    ORDER_TYPE_CHOICES = [
        ("PRODUCT","product"),
        ("INVENTORY","inventory"),
    ]
    order_type = models.CharField(
                                max_length=20,
                                choices=ORDER_TYPE_CHOICES,
                                )
    organization = models.ForeignKey(Organizations, on_delete=models.CASCADE)
    amount = models.DecimalField(max_digits=11,decimal_places=2)
    date = models.DateTimeField()
    method = models.CharField(max_length=255) #Could be a choice field
    currency = models.CharField(max_length=3)
    status = models.BooleanField(default=0) # 0 - pending, 1 - completed
    due = models.DecimalField(max_digits=11,decimal_places=2)
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'payments'

class InventoryOrders(models.Model):
    """ Represents the orders made for restocking inventory items by organization"""
    
    organization = models.ForeignKey(Organizations, on_delete=models.CASCADE)
    vendor = models.ForeignKey(Vendors, on_delete=models.CASCADE)
    inventory_item = models.ForeignKey(InventoryItems, on_delete=models.CASCADE)
    quantity_ordered = models.IntegerField()
    amount = models.DecimalField(max_digits=11,decimal_places=2)
    tax_amount = models.DecimalField(max_digits=11,decimal_places=2)
    shipping_address = models.CharField(max_length=255)
    shipping_method = models.CharField(max_length=255)
    shipping_cost = models.DecimalField(max_digits=11,decimal_places=2)
    payment = models.OneToOneField(Payments, on_delete=models.CASCADE) # Each order will have its own payment
    delivery_status = models.BooleanField(default=0) # 0 - pending, 1 - completed
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'inventory_orders'

class ProductOrders(models.Model):
    """ Represents the orders made by customers to organization"""

    organization = models.ForeignKey(Organizations, on_delete=models.CASCADE)
    hub = models.ForeignKey(Hubs, on_delete=models.CASCADE)
    product = models.ForeignKey(Products, on_delete=models.CASCADE)
    quantity_ordered = models.IntegerField()
    amount = models.DecimalField(max_digits=11,decimal_places=2)
    tax_amount = models.DecimalField(max_digits=11,decimal_places=2)
    business_customer = models.ForeignKey(BusinessCustomers, on_delete=models.CASCADE)
    # Ideally, shipping address is the same as the hub address
    shipping_method = models.CharField(max_length=255)
    shipping_cost = models.DecimalField(max_digits=11,decimal_places=2)
    payment = models.OneToOneField(Payments, on_delete=models.CASCADE)
    delivery_status = models.BooleanField(default=0) # 0 - pending, 1 - completed
    created_at = models.DateTimeField(auto_now_add=True)
    updated_at = models.DateTimeField(auto_now=True)

    class Meta:
        db_table = 'product_orders'

# EAV Models

class EntityType(models.Model):
    """ Represents entities who can have custom attributes """

    name = models.CharField(max_length=255)

    class Meta:
        db_table = 'entity_type'

class Attributes(models.Model):
    """ Represent custom attributes that specific entities can have"""

    entity_type = models.ForeignKey(EntityType, on_delete=models.CASCADE)
    name = models.CharField(max_length=255)
    datatype = models.CharField(max_length=255)

    class Meta:
        db_table = 'attributes'

class Values(models.Model):
    """ Represents values for the custom attributes of entities"""

    entity_id = models.BigIntegerField(blank=False)
    entity_type = models.ForeignKey(EntityType, on_delete=models.CASCADE)
    attribute = models.ForeignKey(Attributes,on_delete=models.CASCADE)
    value = models.TextField()

    def __str__(self):
        return f"{self.entity_type.name} item {self.entity_id} {self.attribute} value: {self.value}, datatype: {self.attribute.datatype}"
    
    class Meta:
        db_table = 'values'