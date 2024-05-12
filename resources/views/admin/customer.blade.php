@extends('layouts.admin')
@section('container-main')
<div class="container-main-customer">
    <div class="Customer-header">
        <div class="ch-search">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-search"></i>
        </div>
    </div>
    <div class="list-customer">
        <table>
            <tr>
                <th>NAME</th>
                <th>CONTACT</th>
                <th>JOINED AT</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
            
            @foreach($customers as $customer)
                @component('customer', ['customer' => $customer])
                @endcomponent
            @endforeach
            </tr>
        </table>
    </div>
</div>
@endsection