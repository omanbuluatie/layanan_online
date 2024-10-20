@component('mail::message')
# Activate Your Account

Hello {{ $user->name }},

Thank you for registering. Please click the button below to activate your account:

@component('mail::button', ['url' => route('user.activate', $user->activation_token)])
Activate Account
@endcomponent

If you did not create an account, no further action is required.

Thanks,<br>
{{ config('app.name') }}
@endcomponent