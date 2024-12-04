from django.contrib.auth.decorators import permission_required
from django.contrib.admin.views.decorators import staff_member_required
from django.contrib.auth.decorators import user_passes_test
from django.shortcuts import HttpResponse

def is_admin(view_func):
    def wrapper(request, *args, **kwargs):
        if request.user.is_admin:
            return view_func(request, *args, **kwargs)
        return HttpResponse("Access denied. You must be an admin.")
    return wrapper