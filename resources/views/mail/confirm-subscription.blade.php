@component('mail::message')
# Thanks for signing up!

To make sure you didn't sign up by accident, please confirm your subscription, by clicking the link below.

@component('mail::button', ['url' => route('confirm', ['token' => $token])])
Confirm
@endcomponent

Thanks, <br>
Christian from blog.mazedlx.net
@endcomponent
