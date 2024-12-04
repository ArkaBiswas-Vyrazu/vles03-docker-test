import random
import string
from django.shortcuts import render, redirect
from .models import LoginActivity, User
from django.http import HttpResponse, JsonResponse,HttpResponseServerError
from django.template import loader
from django.contrib.auth import authenticate, login, logout, update_session_auth_hash
from django.core.paginator import Paginator, EmptyPage, PageNotAnInteger
from .forms import UserForm, EditUserForm
from django.urls import reverse_lazy, reverse
from django.contrib.auth.views import PasswordResetView
from django.contrib.messages.views import SuccessMessageMixin
from .utils import send_password_reset_email, get_ip, login_user, verify_otp, send_email_otp
from .permissions import is_admin
from .models import Email_Otp, UserTokens
from django.utils import timezone
from django.contrib import messages
from django.utils import timezone
from django.conf import settings

# class ResetPasswordView(SuccessMessageMixin, PasswordResetView):
#     template_name = 'reset_password.html'
#     email_template_name = 'password_reset_email.html'
#     subject_template_name = 'password_reset_subject'
#     success_message = "We've emailed you instructions for setting your password, " \
#                       "if an account exists with the email you entered. You should receive them shortly." \
#                       " If you don't receive an email, " \
#                       "please make sure you've entered the address you registered with, and check your spam folder."
#     success_url = reverse_lazy('index')

# @is_admin
# def create_admin_user(request):
#     email = request.POST.get('email')
#     password = request.POST.get('password')
#     name = request.POST.get('name')
#     if not email:
#         raise ValueError("User must have an Email Address.")
#     if not password:
#         raise ValueError("Please enter a Password")
#     template = loader.get_template('UserList.html')
#     user = User.objects.create(
#         email=email, password=password, is_admin=True, name=name)
#     user.save()
#     return HttpResponse(template.render(request))

@is_admin
def create_user(request):
    if request.method == 'POST':
        form = UserForm(request.POST)
        if form.is_valid():
            # form.save()
            return JsonResponse({'success': True})
            # return redirect('users:get_users')
        else:
            # Return form errors as JSON
            return JsonResponse({'success': False, 'error': form.errors, 'message': 'Invalid data'})

@is_admin
def get_users(request):
    user_list = User.objects.all().exclude(name=request.user.name)
    search_name = request.GET.get('search_name', '')
    search_email = request.GET.get('search_email', '')

    if search_name:
        user_list = user_list.filter(name__icontains=search_name)
    if search_email:
        user_list = user_list.filter(email__icontains=search_email)

    # Get the number of items per page from the request, default to 2 if not provided
    items_per_page = request.GET.get('items_per_page', 25)
    try:
        int(items_per_page)
    except:
        if '=' in items_per_page:
            items_per_page = items_per_page.split('=')[1]

    # Create a Paginator object
    paginator = Paginator(user_list, items_per_page)

    # Get the page number from the request, default to 1 if not provided
    page_number = request.GET.get('page', 1)

    try:
        users = paginator.page(page_number)
    except PageNotAnInteger:
        # If page is not an integer, deliver first page.
        users = paginator.page(1)
    except EmptyPage:
        # If page is out of range, deliver last page of results.
        users = paginator.page(paginator.num_pages)
    for index, user in enumerate(users, start=(int(paginator.page(page_number).number - 1) * int(items_per_page)) + 1):
            user.sl_number = index

    form = UserForm()
    formone = EditUserForm()
    return render(request, 'users/users.html', {
        'users': users,
        'form': form,
        'formone': formone,
        'items_per_page': items_per_page,
        'search_name':search_name,
        'search_email':search_email
    })


def user_login(request):
    try:
        if request.method == 'POST':
            if login_user(request) == True:
                return redirect('users:otp_verification')
            else:
                # Invalid login credentials
                context = "Invalid username or password"
                return render(request, 'users/login.html', {"context": context})


        return render(request, 'users/login.html', {})

    except Exception as e:
        context = str(e)
        return render(request, 'users/login.html', {"context": context})


def otp_verification(request,message = None):
    try:
        if request.session.get('otp_message'):
            context = request.session.get('otp_message')
            render(request, 'users/otp_verification.html', {"otp_message": context})

        if request.method == 'POST':
            if verify_otp(request):
                return redirect('index')
            else:
                context = "Invalid OTP"
                return render(request, 'users/otp_verification.html', {"context": context})

        return render(request, 'users/otp_verification.html')

    except Exception as e:
        context = str(e)
        return render(request, 'users/otp_verification.html', {"context": context})


# def modal(request):
#     return render(request, 'user-modal.html')

@is_admin
def delete_user(request, email):
    user = User.objects.filter(email=email).first()
    if not user:
        return HttpResponse('User not found.')
    user.delete()
    return redirect("users:get_users")

@is_admin
def update_user(request):
    if request.method == 'POST':
        try:
            form = EditUserForm(request.POST)
            if form.is_valid():
                original_email = form.cleaned_data.get('original_email')
                new_name = form.cleaned_data.get('edit_name')
                new_email = form.cleaned_data.get('edit_email')
                new_role = form.cleaned_data.get('edit_role')
                edit_ip_lock = form.cleaned_data.get('edit_ip_lock')
                ip_lock_address = form.cleaned_data.get('edit_ip_lock_address')
                edit_password=form.cleaned_data.get('edit_password')
                user = User.objects.filter(email=original_email).first()
                if not user:
                    raise Exception('User not found')
                user.name = new_name
                user.email = new_email
                user.is_admin = new_role
                if edit_password or edit_password!='':
                    user.set_password(edit_password)
                if edit_ip_lock == True:
                    if ip_lock_address is None or ip_lock_address == "":
                        user.ip_lock_address = None
                    if ip_lock_address:
                        user.ip_lock_address = ip_lock_address
                else:
                    user.ip_lock_address = None
                user.save()
                return JsonResponse({'success': True})

            else:
                return JsonResponse({'success': False, 'error': form.errors, 'message': 'Invalid data'})

        except Exception as e:
            return JsonResponse({'success': False, 'error': str(e), 'message': 'Invalid data'})
    else:
        return render(request, 'users/users.html')

@is_admin
def add_user(request):
    if request.method == 'POST':
        form = UserForm(request.POST)
        if form.is_valid():
            role=form.cleaned_data.get('role')
            ip_lock = form.cleaned_data.get('ip_lock_address')
            # Get a User instance but don’t save it yet
            user = form.save(commit=False)
            # Hash the password
            user.set_password(form.cleaned_data['password'])
            if role=='1':
                user.is_admin=True
            else:
                user.is_admin=False
            if ip_lock:
                # ip = get_ip(request)
                user.ip_lock_address = ip_lock
            user.save()
            # Redirect to the users page after successful submission
            return JsonResponse({'success': True})

        else:
            # Return form errors as JSON
            return JsonResponse({'success': False, 'error': form.errors, 'message': 'Invalid data'})


def user_logout(request):
    logout(request)
    # del(request.session["otl_session_id"])
    request.session.flush()
    return redirect('/users/login')

def reset_password(request):
    if request.method == 'POST':
        current_password = request.POST.get('current_password')
        new_password = request.POST.get('new_password')
        confirm_password = request.POST.get('confirm_password')

        if not current_password or not new_password or not confirm_password:
            context = "All fields are required."
            return render(request, "users/reset_password.html", {"context": context})

        user = request.user
        if not user.check_password(current_password):
            context = "Current password is incorrect."
            return render(request, "users/reset_password.html", {"context": context})

        if new_password != confirm_password:
            context = "New password and confirm password do not match."
            return render(request, "users/reset_password.html", {"context": context})

        user.set_password(new_password)
        user.save()
        update_session_auth_hash(request, user)
        return redirect("index")

    return render(request, "users/reset_password.html")


@is_admin
def login_activity(request):
    log_list = LoginActivity.objects.all().order_by('-created_at')
    users=User.objects.all()
    search_name = request.GET.get('search_name', '')
    search_email = request.GET.get('search_email', '')

    if search_name:
        users = users.filter(name__icontains=search_name)
    if search_email:
        users = users.filter(email__icontains=search_email)

    log_list = log_list.filter(user__in=users)
    # Get the number of items per page from the request, default to 2 if not provided
    items_per_page = request.GET.get('items_per_page', 25)
    try:
        int(items_per_page)
    except:
        if '=' in items_per_page:
            items_per_page = items_per_page.split('=')[1]

    # Create a Paginator object
    paginator = Paginator(log_list, items_per_page)

    # Get the page number from the request, default to 1 if not provided
    page_number = request.GET.get('page', 1)

    try:
        users = paginator.page(page_number)
    except PageNotAnInteger:
        # If page is not an integer, deliver first page.
        users = paginator.page(1)
    except EmptyPage:
        # If page is out of range, deliver last page of results.
        users = paginator.page(paginator.num_pages)
    return render(request, "users/login_activity.html", {"logs": log_list,"users":users,'items_per_page': items_per_page,})
    

# @is_admin
def delete_log(request, id):
    log = LoginActivity.objects.filter(pk=id).first()
    
    if not log:
        return HttpResponse('Log not found.')

    log.delete()
    # return redirect("users/login_activity")
    return redirect(reverse('users:login_activity'))

#user is authendticated 
def resend_otp(request):
    user_agent_string = request.META.get('HTTP_USER_AGENT', "")
    email=request.session["email"]
    user=User.objects.filter(email=email).first()
    otp = "".join(random.choices(string.digits, k=6))
    email_otp= Email_Otp.objects.filter(user=user).first()
    if email_otp : 
        email_otp.otp = otp
        email_otp.expires_at = timezone.now()+timezone.timedelta(minutes=10)
        email_otp.save()
    else:
        email_otp = Email_Otp.objects.create(
            user=user,
            otp=otp,
            expires_at=timezone.now()+timezone.timedelta(minutes=10)
        )
    send_email_otp(user,otp,user_agent_string)
    request.session['otp_message'] = "OTP has been resent"
    return redirect(reverse('users:otp_verification'))

def update_user_status(request):
    try:
        if request.method == 'POST':
            user_email = request.POST.get('user_email')
            new_status = request.POST.get('status')

            # Update the User model's status field for the given user email
            try:
                new_status=int(new_status)
                user = User.objects.filter(email=user_email).first()
                user.is_active = new_status
                user.save()
            except Exception as e:
                return HttpResponse(status=500)

        return HttpResponse(status=204)

    except Exception as e:
        print(str(e))

# def user_status(request):
#     user=request.user
#     status=user.status
#     print(status)
#     context = {'user_status': status}  # Replace with your actual data
#     return render(request, 'users.html', context)

def forgot_password(request):
    if request.method == 'POST':
        # username = request.POST['username']
        # user = User.objects.get(username=username)
        email = request.POST['email']
        try:
            user = User.objects.get(email=email)
            send_password_reset_email(user, request)
            messages.success(request, "Password Reset Email successfully sent to this address")
            return redirect('users:user_login')
        except User.DoesNotExist:
            messages.error(request,"This email does not exist")
    return render(request, 'users/forgot_password.html')

def password_reset_confirm(request):
    uid = request.GET.get('uidb64',None)
    token = request.GET.get('token',None)

    # In case uid or token is not found in url
    if uid is None or token is None:
        messages.error(request,'URL is broken, please try again or contact administrator')
        return redirect('users:forgot-password')

    try:
        token = UserTokens.objects.get(uid=uid, token=token)
    except UserTokens.DoesNotExist:
        messages.error(request,'URL is broken, please try again or contact an administrator')
        return redirect('users:forgot-password')
    
    # Check if token is still valid
    if token.is_expired():
        messages.error(request, 'Password Request has timed out, please try again or contact an administrator')
        token.delete()
        return redirect("users:forgot-password")

    request.session['token_user'] = token.user.name

    #To make sure link cannot be used again
    token.delete()
    return redirect('users:password_reset_complete')

def password_reset_complete(request):
    if request.method == 'POST':
        name = request.session.pop('token_user',None)
        if name is None:
            messages.error(request, 'Password Reset has failed, please try again')
            return redirect("users:forgot-password")
        user = User.objects.get(name=name)
        
        password1 = request.POST.get('password1')
        password2 = request.POST.get('password2')

        if password1 != password2:
            messages.error(request, 'Password Reset has failed, please try again')
            return redirect("users:forgot-password")
        else:
            user.set_password(password1)
            user.save()
            messages.success(request,'Password Reset has been successful! Please login again to confirm')
            return redirect("users:user_login")

    return render(request, 'users/password_reset_confirm.html')
