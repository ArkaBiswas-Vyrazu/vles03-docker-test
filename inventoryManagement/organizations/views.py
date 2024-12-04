from django.shortcuts import render, redirect, get_object_or_404
from .forms import *
from django.contrib import messages
from django.http import HttpResponseRedirect

# Create your views here.

def warehouses_list(request):
    warehouses = Warehouses.objects.all()
    return render(request, 'organizations/warehouses-list.html', context={'warehouses':warehouses, 'user': request.user})

def create_warehouse(request):
    w_form = WareHouseForm()
    a_form = AddressForm()
    if request.method == "POST":
        w_form = WareHouseForm(request.POST)
        a_form = AddressForm(request.POST)  
        if w_form.is_valid() and a_form.is_valid():
            address = a_form.save()
            warehouse = w_form.save(commit = False)
            warehouse.addresses = address
            warehouse.save()
            messages.success(request, 'Warehouse added successfully.')
            return redirect('organizations:warehouses_list')
        else:
            messages.error(request, 'Something went wrong.')
            return redirect('organizations:create_warehouse')
    return render(request, 'organizations/warehouses-create.html', context={'w_form':w_form,'a_form':a_form})

def edit_warehouse(request, pk):
    warehouse = get_object_or_404(Warehouses, warehouse_id = pk)
    address = get_object_or_404(Addresses, address_id = warehouse.addresses_id)
    w_form = WareHouseForm(instance = warehouse)
    a_form = AddressForm(instance = address)
    if request.method == "POST":
        w_form = WareHouseForm(request.POST, instance = warehouse)
        a_form = AddressForm(request.POST, instance = address)  
        if w_form.is_valid() and a_form.is_valid():
            w_form.save()
            a_form.save()
            messages.success(request, 'Warehouse updated successfully.')
            return redirect('organizations:warehouses_list')
        else:
            messages.error(request, 'Something went wrong.')
            return HttpResponseRedirect(request.META.get('HTTP_REFERER'))
    return render(request, 'organizations/warehouse-edit.html', context={'w_form':w_form,'a_form':a_form, 'warehouse': warehouse})

def delete_warehouse(request, pk):
    warehouse = get_object_or_404(Warehouses, warehouse_id = pk)
    warehouse.status = 2
    warehouse.save()
    return HttpResponseRedirect(request.META.get('HTTP_REFERER'))

def store_list(request):
    stores = Stores.objects.all()
    return render(request, 'organizations/store-list.html', context = {'stores':stores, 'user': request.user})

def create_store(request):
    s_form = StoreForm()
    a_form = AddressForm()
    if request.method == "POST":
        s_form = StoreForm(request.POST)
        a_form = AddressForm(request.POST)  
        if s_form.is_valid() and a_form.is_valid():
            address = a_form.save()
            store = s_form.save(commit = False)
            store.addresses = address
            store.save()
            messages.success(request, 'Store added successfully.')
            return redirect('organizations:store_list')
        else:
            messages.error(request, 'Something went wrong.')
            return HttpResponseRedirect(request.META.get('HTTP_REFERER'))
    return render(request, 'organizations/store-create.html',{'s_form':s_form, 'a_form':a_form})

def edit_store(request, pk):
    store = get_object_or_404(Stores, store_id = pk)
    address = get_object_or_404(Addresses, address_id = store.addresses_id)
    s_form = StoreForm(instance = store)
    a_form = AddressForm(instance = address)
    if request.method == "POST":
        s_form = StoreForm(request.POST, instance = store)
        a_form = AddressForm(request.POST, instance = address)  
        if s_form.is_valid() and a_form.is_valid():
            s_form.save()
            a_form.save()
            messages.success(request, 'Store updated successfully.')
            return redirect('organizations:store_list')
        else:
            messages.error(request, s_form.errors)
            messages.error(request, a_form.errors)
            return HttpResponseRedirect(request.META.get('HTTP_REFERER'))
    return render(request, 'organizations/store-edit.html',{'s_form':s_form, 'a_form':a_form, 'store': store})

def delete_store(request, pk):
    store = get_object_or_404(Stores, store_id = pk)
    store.status = 2
    store.save()
    return HttpResponseRedirect(request.META.get('HTTP_REFERER'))