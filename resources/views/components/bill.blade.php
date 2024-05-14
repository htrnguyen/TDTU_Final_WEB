@props(['order'])
<template>
    <div class="order-info">
        <h2>Order Information</h2>
        <ul>
            <li>
                <span class="label">Shipping To:</span>
                <span>{{ $order['shipping_address'] }}</span>
            </li>
            <li>
                <span class="label">Shipping Method:</span>
                <span>{{ $order['shipping_method'] }}</span>
            </li>
            <li>
                <span class="label">Payment Method:</span>
                <span>{{ $order['payment_method'] }}</span>
            </li>
            <li>
                <span class="label">Note:</span>
                <span>{{ $order['note'] }}</span>
            </li>
        </ul>
    </div>
    <div>
        <h3>Product List:</h3>
        <table class="product-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order['products'] as $index => $product)
                <tr class="ps-5 pa-5">
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->size }}</td>
                    <td>${{ number_format($product->price, 2) }}</td>
                    <td>{{ $product->quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</template>