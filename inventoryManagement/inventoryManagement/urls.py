"""inventoryManagement URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, include
from django.conf import settings
from django.conf.urls.static import static
from django.contrib.auth import views as auth_views
from . import views

urlpatterns = [
    path('admin/', admin.site.urls),
    # path('', include('authentication.urls', namespace = 'authentication')),
    path('', views.index, name = 'index'),
    path('organizations/', include('organizations.urls', namespace = 'organizations')),
    path('users/', include('users.urls', namespace = 'users')),
    path('sales-inventory/', include('sales_inventory.urls', namespace = 'sales_inventory')),

    # path('password-change/', auth_views.PasswordChangeView.as_view(template_name = 'authentication/password-change.html'), name='password_change'),
    # path('password-change/done/', auth_views.PasswordChangeDoneView.as_view(template_name = 'authentication/password-change-done.html'), name='password_change_done'),
    # path('password-reset/', auth_views.PasswordResetView.as_view(template_name = 'authentication/password-reset.html'), name='password_reset'),
    # path('password-reset/done/', auth_views.PasswordResetDoneView.as_view(template_name = 'authentication/password-reset-done.html'), name='password_reset_done'),
    # path('reset/<uidb64>/<token>/', auth_views.PasswordResetConfirmView.as_view(template_name = 'authentication/password-reset-confirm.html'), name='password_reset_confirm'),
    # path('reset/done/', auth_views.PasswordResetCompleteView.as_view(template_name = 'authentication/password-reset-complete.html'), name='password_reset_complete'),
]


if settings.DEBUG:
	urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)