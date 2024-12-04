from django.core.mail import send_mail
from django.template.loader import get_template, render_to_string
from django.template import Context
import json, random, string, threading
from django.core.mail import EmailMessage
from user_agents import parse
from django.conf import settings
from django.contrib.auth import authenticate, login
from .models import Email_Otp, LoginActivity, User, UserTokens
from django.utils import timezone
from uuid import uuid4
from secrets import token_urlsafe

def send_password_reset_email(user, request):
    # Get the template for the email
    template = get_template('users/password_reset_email.html')

    # Creating token for verification
    if UserTokens.objects.filter(user=user).exists():
        UserTokens.objects.filter(user=user).delete()
    
    token = UserTokens.objects.create(
        user = user,
        uid = uuid4(),
        token = token_urlsafe(32),
    )

    # Create a context with the user's information
    context = {
        'user': user,
        'domain': settings.DOMAIN_NAME,  # replace with your domain
        'protocol': 'https' if request.is_secure() else 'http',
        'uid': token.uid,
        'token': token.token,
    }

    # Render the template with the context
    subject = "Reset Your Password"
    from_email = settings.ADMIN_EMAIL  # replace with your email
    message = template.render(context=context)

    # Send the email
    send_mail(subject, message, from_email, [user.email],
              fail_silently=False)

def get_ip(request):
    if request.META.get('HTTP_X_FORWARDED_FOR'):
        ip = request.META.get('HTTP_X_FORWARDED_FOR').split(',')[0].strip()
    else:
        ip = request.META.get('REMOTE_ADDR')
    return ip


class EmailThread(threading.Thread):
    def __init__(self, subject, body, recipient_list):
        self.subject = subject
        self.recipient_list = recipient_list
        self.body = body
        threading.Thread.__init__(self)

    def run(self):
        for recipient in self.recipient_list:
            get=recipient.split(',')
            for ans in get:
                print("ans-->",ans)
                email = EmailMessage(
                self.subject, self.body, "pai-otp@vyrazu.com", [ans]
                )
                email.content_subtype = "html"
                max_tries = 2
                tries = 0
                while tries < max_tries:
                    try:
                        print('sending email....'.format(ans))
                        email.send()
                        print('mail sent....'.format(ans))
                        break  # exit the loop if email successfully sent
                    except Exception as e:
                        print("mail sending error log ==>", str(e))
                        tries += 1 



def send_email(subject, body, recipient_list):
    EmailThread(subject, body, recipient_list).start()


def send_email_otp(user, otp, user_agent_string):
    try:
        print("\n\n OTP for login ==>", otp,"\n\n")
        user_agent = parse(user_agent_string)
        browser = user_agent.browser.family
        browser_version = user_agent.browser.version_string
        os = user_agent.os.family
        msg_html = render_to_string('users/email_otp.html', {
            'name':user.name.title(),
            'email':user.email,
            'otp':otp,
            'browser':browser,
            'browser_version':browser_version,
            'os':os
        })

        send_email(subject='Your One-Time Password (OTP) for Secure OTC Login.', body=msg_html, recipient_list=[settings.ADMIN_EMAIL])

        return True

    except Exception as e:
        print('error sending email otp: ', str(e))

        return str(e)




def login_user(request):
    email = request.POST.get('email')
    password = request.POST.get('password')
    # ip_lock=request.POST.get('ip_lock')
    user_agent_string = request.META.get('HTTP_USER_AGENT', "")
    session_key = request.session.session_key
    if session_key == None:
        request.session.create()
        session_key = request.session.session_key
    ip = get_ip(request)
    
    user = authenticate(request, username=email, password=password)
    if user is not None:
        # print("\n\n ======>",user.status, "\n\n")
        print("\n\n ======>",user.is_active, "\n\n")
        # if user.status == False:
        if user.is_active == False:
            raise Exception("Your account is not activated. Please contact admin")
        if user.ip_lock_address:
            if user.ip_lock_address != ip:
                raise Exception("This ip address is not allowed.")

        otp = "".join(random.choices(string.digits, k=6))
        if email_otp := Email_Otp.objects.filter(user=user).first():
            email_otp.otp = otp
            email_otp.expires_at = timezone.now()+timezone.timedelta(minutes=10)
            email_otp.save()
        else:
            email_otp = Email_Otp.objects.create(
                user=user,
                otp=otp,
                #Time of Expry of OTp
                expires_at=timezone.now()+timezone.timedelta(minutes=10)
            )
        request.session["email"] = email
        send_email_otp(user,otp,user_agent_string)

        return True

    else:
        return False



def verify_otp(request):
    entered_otp = request.POST.get('otp')
    keep_me_logged_in = request.POST.get('keep_me_logged_in')
    email = request.session.get('email')

    user = User.objects.get(email=email)
    stored_otp = user.email_otp
    if not stored_otp:
        raise Exception("Please login again!")
    otp = stored_otp.otp
    if str(otp) == str(entered_otp):
        if stored_otp.expires_at < timezone.now():
            raise Exception("OTP expired. Please login again!")
        login(request, user)
        user.otl_session_id = request.session.session_key
        user.save()
        if not keep_me_logged_in:
            request.session.set_expiry(0)
        del request.session['email']

        # LoginActivity.objects.create(user=user, login_time=timezone.now())

        return True
    return False

# def resend_otp(request):
