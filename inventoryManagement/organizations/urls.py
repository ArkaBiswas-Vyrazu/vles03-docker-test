from django.urls import path
from .views import *

app_name = 'organizations'

urlpatterns = [
    # path('general-form', general_form, name = 'general_form'),
    path('warehouses/list', warehouses_list, name = 'warehouses_list'),
    path('warehouses/create', create_warehouse, name = 'create_warehouse'),
    path('warehouses/edit/<uuid:pk>', edit_warehouse, name = 'edit_warehouse'),
    path('warehouses/delete/<uuid:pk>', delete_warehouse, name = 'delete_warehouse'),
    path('store/list', store_list, name = 'store_list'),
    path('store/create', create_store, name = 'create_store'),
    path('store/edit/<uuid:pk>', edit_store, name = 'edit_store'),
    path('store/delete/<uuid:pk>', delete_store, name = 'delete_store'),
]
