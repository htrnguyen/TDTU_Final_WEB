@component('mail::message')
# Hello {{ $user->first_name }} {{ $user->last_name }},

Thank you for your purchase. 

@foreach($order->products as $product)
Product: {{ $product->name }}
Quantity: {{ $product->quantity }}
@endforeach

Total: {{ $order->total }}

We will ship your order as soon as possible. If you have any questions, please contact us.

Best,  
{{ config('app.name') }}

@endcomponent