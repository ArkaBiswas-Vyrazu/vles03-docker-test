from django.contrib import admin
from django.urls import path
from .views import *
from django.contrib.auth import views

app_name = 'users'

urlpatterns = [
    # path('create-admin-user',create_admin_user),
    path('create-user/',create_user,name='create-user'),
    path('get-users/',get_users, name='get_users'),
    path('login/',user_login, name='user_login'),
    path('logout/',user_logout,name='user_logout'),
    path('forgot-password/',forgot_password,name='forgot-password'),
    # path('add_user/',add_user,name='add-user'),
    # path('modal/',modal,name='modal'),
    # path('delete-user/',delete_user,name='delete_user'),
    path('delete-user/<str:email>/', delete_user, name='delete_user'),
    path('update-user/',update_user,name='update_user'),
    path('add-user/',add_user,name='add_user'),
    path('reset-password/',reset_password,name='reset_password'),
    path('hash/',hash,name='hash'),
    # path('password-reset-confirm/<uidb64>/<token>/',
    #      views.PasswordResetConfirmView.as_view(template_name='users/password_reset_confirm.html'),
    #      name='password_reset_confirm'),
    path('password-reset-confirm/', password_reset_confirm, name='password_reset_confirm'),
    path('password-reset-complete/', password_reset_complete, name="password_reset_complete"),
    path('otp_verification/', otp_verification, name='otp_verification'),
    path('login-activity/', login_activity, name='login_activity'),
    path('delete-log/<int:id>/', delete_log, name='delete_log'),
    path('resend_otp/',resend_otp,name='resend_otp'),
    path('update_user_status/',update_user_status,name='update_user_status'),
    # path('user_status/',user_status,name='user_status')
]