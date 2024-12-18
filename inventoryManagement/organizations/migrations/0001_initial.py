# Generated by Django 3.2 on 2022-05-06 18:02

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion
import uuid


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='Addresses',
            fields=[
                ('status', models.IntegerField(default=1)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('created_by', models.IntegerField(default=1)),
                ('updated_by', models.IntegerField(default=1)),
                ('address_id', models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False)),
                ('address_line_one', models.CharField(blank=True, max_length=255, null=True)),
                ('address_line_two', models.CharField(blank=True, max_length=255, null=True)),
                ('city', models.CharField(blank=True, max_length=255, null=True)),
                ('country', models.CharField(blank=True, max_length=255, null=True)),
                ('pin_code', models.CharField(blank=True, max_length=6, null=True)),
            ],
            options={
                'abstract': False,
            },
        ),
        migrations.CreateModel(
            name='Organizations',
            fields=[
                ('status', models.IntegerField(default=1)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('created_by', models.IntegerField(default=1)),
                ('updated_by', models.IntegerField(default=1)),
                ('organization_id', models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False)),
            ],
            options={
                'abstract': False,
            },
        ),
        migrations.CreateModel(
            name='Warehouses',
            fields=[
                ('status', models.IntegerField(default=1)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('created_by', models.IntegerField(default=1)),
                ('updated_by', models.IntegerField(default=1)),
                ('warehouse_id', models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False)),
                ('name', models.CharField(max_length=255)),
                ('short_code', models.CharField(max_length=45)),
                ('addresses', models.OneToOneField(on_delete=django.db.models.deletion.DO_NOTHING, to='organizations.addresses')),
                ('organizations', models.OneToOneField(on_delete=django.db.models.deletion.DO_NOTHING, to='organizations.organizations')),
                ('warehouse_head', models.ForeignKey(on_delete=django.db.models.deletion.DO_NOTHING, to=settings.AUTH_USER_MODEL)),
            ],
            options={
                'abstract': False,
            },
        ),
        migrations.CreateModel(
            name='Stores',
            fields=[
                ('status', models.IntegerField(default=1)),
                ('created_at', models.DateTimeField(auto_now_add=True)),
                ('updated_at', models.DateTimeField(auto_now=True)),
                ('created_by', models.IntegerField(default=1)),
                ('updated_by', models.IntegerField(default=1)),
                ('store_id', models.UUIDField(default=uuid.uuid4, editable=False, primary_key=True, serialize=False)),
                ('name', models.CharField(max_length=255)),
                ('short_code', models.CharField(max_length=45)),
                ('addresses', models.OneToOneField(on_delete=django.db.models.deletion.DO_NOTHING, to='organizations.addresses')),
                ('organizations', models.OneToOneField(on_delete=django.db.models.deletion.DO_NOTHING, to='organizations.organizations')),
                ('store_head', models.ForeignKey(on_delete=django.db.models.deletion.DO_NOTHING, to=settings.AUTH_USER_MODEL)),
            ],
            options={
                'abstract': False,
            },
        ),
    ]
