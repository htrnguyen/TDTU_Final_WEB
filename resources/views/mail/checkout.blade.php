@component('mail::message')
# Hello {{ $user->first_name }} {{ $user->last_name }},

You have added the following items to your cart:

{{-- Foreach --}}
@foreach ($cartItems as $item)
- {{ $item->name }} x {{ $item->quantity }}
@endforeach

<!-- @component('mail::button', ['url' => $cartUrl, 'color' => 'success', 'align' => 'center'])
View Cart
@endcomponent -->

If you did not add these items to your cart, please contact us immediately.

Cheers,  
{{ config('app.name') }}

@endcomponent