@component('mail::message')

# Hello {{ $user->first_name }} {{ $user->last_name }},

Thank you for registering with us!
Before we can get started, you need to confirm your registration.

@component('mail::button', ['url' => $verificationUrl, 'color' => 'success', 'align' => 'center'])
    Verify Your Email
@endcomponent

If you received this email by mistake, simply delete it. You won't be subscribed if you don't click the confirmation
link above.

Cheers,
{{ config('app.name') }}
@endcomponent
