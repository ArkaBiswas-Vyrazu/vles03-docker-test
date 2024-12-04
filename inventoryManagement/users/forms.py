from django.forms import EmailInput, ModelForm, TextInput, PasswordInput, BooleanField, ChoiceField
from django import forms
from django.core.exceptions import ValidationError
from .models import User
# creating a form
class UserForm(ModelForm):
    ip_lock=BooleanField(
        required=False,
        )
    ROLE_CHOICES = [
        (0, 'User'),
        (1, 'Admin'),
    ]
    role= forms.ChoiceField(label='Role', choices=ROLE_CHOICES, widget=forms.Select(attrs={'class': "form-control", 'style': 'max-width: 300px;'}))
    class Meta:
        model = User
        fields = ['name', 'email', 'password','ip_lock_address']

        widgets = {
            'name': TextInput(attrs={
                'class': "form-control",
                'style': 'max-width: 300px;',
                'placeholder': 'Name'
                }),
            'email': EmailInput(attrs={
                'class': "form-control", 
                'style': 'max-width: 300px;',
                'placeholder': 'Email'
                }),
            'password': PasswordInput(attrs={
                'class': "form-control",
                'style': 'max-width: 300px;',
                'placeholder': 'Password'
                }),
            'ip_lock_address':TextInput(attrs={
                'class': "form-control",
                'style': 'max-width: 300px;margin-bottom: 20px',
                'placeholder': 'IP Lock'
                })
            
        }
    
    def clean_email(self):
        email = self.cleaned_data.get('email')
        if User.objects.filter(email = email).exists():
            raise ValidationError('email is already taken')
        return email
    def null_ip_lock(self):
        ip_lock_address=self.cleaned_data('ip_lock_address')
        if ip_lock_address==None:
            ip_lock_address=" "
        return ip_lock_address
    
class EditUserForm(forms.Form):
    edit_name = forms.CharField(max_length=100, label='Name', widget=forms.TextInput(attrs={'class': "form-control", 'style': 'max-width: 300px;'}))
    edit_password = forms.CharField(max_length=100,required=False ,label='Password', widget=forms.TextInput(attrs={'class': "form-control", 'style': 'max-width: 300px;'}))
    edit_email = forms.EmailField(label='Email', widget=forms.EmailInput(attrs={'class': "form-control", 'style': 'max-width: 300px;'}))
    original_email = forms.CharField(widget=forms.HiddenInput())
    ROLE_CHOICES = [
        (0, 'User'),
        (1, 'Admin'),
    ]
    edit_role= forms.ChoiceField(label='Role', choices=ROLE_CHOICES, widget=forms.Select(attrs={'class': "form-control", 'style': 'max-width: 300px;'}))
    edit_ip_lock = BooleanField(required=False, label='ip lock')
    edit_ip_lock_address = forms.CharField(label='IP Lock',required=False,widget=forms.TextInput(attrs={'class': "form-control", 'style': 'max-width: 300px;'}))
    
    def clean(self):
        cleaned_data = super().clean()
        email = cleaned_data.get('email')
        original_email = cleaned_data.get('original_email')
        if not email == original_email:
            if User.objects.filter(email = email).exclude(email = original_email).exists():
                raise Exception('email is already taken')
        return cleaned_data
    
    # def clean_edit_password(self):
    #     edit_password = self.cleaned_data.get('edit_password')
    #     if edit_password:
    #         import hashlib
    #         hashed_password = hashlib.sha256(edit_password.encode()).hexdigest()
    #         self.cleaned_data['edit_password'] = hashed_password
    #     return self.cleaned_data.get('edit_password')
