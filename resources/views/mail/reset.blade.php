@component('mail::message')
# Hello {{ $user->first_name }} {{ $user->last_name }},

We received a request to reset your password. Click the button below to reset it. 

@component('mail::button', ['url' => $resetPasswordUrl, 'color' => 'success', 'align' => 'center'])
Reset Your Password
@endcomponent

If you did not request a password reset, no further action is required.

Cheers,  
{{ config('app.name') }}

@endcomponent