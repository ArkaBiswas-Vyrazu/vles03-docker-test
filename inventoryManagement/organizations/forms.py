from django import forms
from .models import *
# from authentication.models import AppUser
from users.models import User
from crispy_forms.helper import FormHelper
from crispy_forms.layout import Layout, Fieldset, Field, Div
# from crispy_forms.bootstrap import StrictButton

class WareHouseForm(forms.ModelForm):

    warehouse_head = forms.ModelChoiceField(
        queryset=User.objects.filter(is_active = True), required=True, empty_label="----Select User----", widget=forms.Select(attrs={'class': 'form-control'}))

    name = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"warehous-name", "name":"warehouse-name", "placeholder":"Warehouse Name", "class":"form-control col-md-7 col-xs-12"}))

    short_code = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"short-code", "name":"short-code", "placeholder":"Short Code", "class":"form-control col-md-7 col-xs-12"}))

    status = forms.CharField(required=True, widget=forms.Select(
        choices=(('','Choose Status'),(1,'Active'),(2,'Disabled')), attrs={'class': 'form-control'}))

    class Meta:
        fields = ['warehouse_head', 'name', 'short_code', 'status']
        model = Warehouses

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.helper = FormHelper()
        # self.helper.form_class = "form-horizontal"
        self.helper.form_tag = False
        self.helper.disable_csrf = True
        self.helper.label_class = 'col-md-4'
        self.helper.field_class = 'col-md-8'
        self.helper.layout = Layout(
            Fieldset(
                'Warehouse Details',
                Field('warehouse_head', wrapper_class="input-group"),
                Field('name', wrapper_class="input-group"),
                Field('short_code', wrapper_class="input-group"),
                Field('status', wrapper_class="input-group"),
                css_class="form-body")
        )

class StoreForm(forms.ModelForm):

    store_head = forms.ModelChoiceField(
        queryset=User.objects.filter(is_active = True), required=True, empty_label="----Select User----", widget=forms.Select(attrs={'class': 'form-control'}))

    name = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"store-name", "name":"store-name", "placeholder":"Store Name", "class":"form-control"}))

    short_code = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"short-code", "name":"short-code", "placeholder":"Short Code", "class":"form-control"}))

    store_currency = forms.CharField(required=True, widget=forms.Select(
        choices=Stores.CURRENCY_CHOICES, attrs={'class': 'form-control'}))

    status = forms.CharField(required=True, widget=forms.Select(
        choices=(('','Choose Status'),(1,'Active'),(2,'Disabled')), attrs={'class': 'form-control'}))

    class Meta:
        fields = ['store_head', 'name', 'short_code', 'store_currency', 'status']
        model = Stores

    def clean_store_currency(self):
        currency = self.cleaned_data.get('store_currency')
        if currency == 'CHOOSE_CURRENCY':
            raise forms.ValidationError('Please choose currency')
        return currency

    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.helper = FormHelper()
        # self.helper.form_class = "form-horizontal"
        self.helper.form_tag = False
        self.helper.disable_csrf = True
        self.helper.label_class = 'col-md-4'
        self.helper.field_class = 'col-md-8'
        self.helper.layout = Layout(
            Fieldset(
                'Store Details',
                Field('store_head', wrapper_class="input-group"),
                Field('name', wrapper_class="input-group"),
                Field('short_code', wrapper_class="input-group"),
                Field('store_currency', wrapper_class="input-group"),
                Field('status', wrapper_class="input-group"),
                css_class="form-body")
        )

class AddressForm(forms.ModelForm):
    address_line_one = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"address-line-1", "name":"address-line-1", "placeholder":"Address Line 1", "class":"form-control"}))

    address_line_two = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"address-line-2", "name":"address-line-2", "placeholder":"Address Line 2", "class":"form-control"}))

    city = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"city", "name":"city", "placeholder":"City", "class":"form-control"}))

    state = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"state", "name":"state", "placeholder":"State", "class":"form-control"}))

    country = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"country", "name":"country", "placeholder":"Country", "class":"form-control"}))

    pin_code = forms.CharField(required=True, widget=forms.TextInput(
        attrs={"id":"pin-code", "name":"pin-code", "placeholder":"Pin Code", "class":"form-control"}))
        
    class Meta:
        fields = ['address_line_one', 'address_line_two', 'city', 'state', 'country', 'pin_code']
        model = Addresses

    def clean_pin_code(self):
        pin_code = self.cleaned_data.get('pin_code')
        if len(pin_code) < 6:
            raise forms.ValidationError('Pin code must be 6 digit long.')
        return pin_code
    
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.helper = FormHelper()
        # self.helper.form_class = "form-horizontal"
        self.helper.form_tag = False
        self.helper.disable_csrf = True
        self.helper.label_class = 'col-md-4'
        self.helper.field_class = 'col-md-8'
        self.helper.layout = Layout(           
            Fieldset(
            'Address Details',
            Field('address_line_one', wrapper_class="input-group"),
            Field('address_line_two', wrapper_class="input-group"),
            Field('city', wrapper_class="input-group"),
            Field('state', wrapper_class="input-group"),
            Field('country', wrapper_class="input-group"),
            Field('pin_code', wrapper_class="input-group"),
            css_class = 'form-group')
        )
        