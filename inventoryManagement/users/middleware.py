from django.shortcuts import redirect
from django.urls import reverse
from django.contrib.auth import logout
from .utils import get_ip
from urllib.parse import urlparse
import re

excluded_urls = [
    # Add any other paths that should be publicly accessible
    reverse('users:user_login'),
    r'^/admin/',
    '/users/otp_verification/',
    '/users/resend_otp/',
    '/user/reset-password/',
    '/users/forgot-password/',
    '/users/password-reset-confirm/',
    '/users/password-reset-complete/',
]
class LoginRequiredMiddleware:
    def __init__(self, inner):
        self.inner = inner

    def __call__(self, request):
        full_path = request.get_full_path()
        parsed_url = urlparse(full_path)

        # if request.get_full_path() in excluded_urls:
        #     return self.inner(request)

        # if request.user.is_authenticated and request.get_full_path() == '/':
        #     print("Redirecting Here 0")
        #     return self.inner(request)

        # For regex paths
        for pattern in excluded_urls:
            if re.match(pattern,full_path):
                return self.inner(request)

        if parsed_url.path in excluded_urls:
            return self.inner(request)
        
        if request.user.is_authenticated and parsed_url.path == '/':
            return self.inner(request)

        if not request.user.is_authenticated:
            return redirect('users:user_login')

        user = request.user
        if user.otl_session_id != request.session.session_key:
            logout(request)
            return redirect('users:user_login')
        
        if user.ip_lock_address:
            if user.ip_lock_address != get_ip(request):
                logout(request)
                return redirect('users:user_login')
        
        return self.inner(request)
