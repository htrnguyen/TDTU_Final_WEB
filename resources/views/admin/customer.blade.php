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
                <th>Name</th>
                <th>Details</th>
                <th>Username</th>
                <th>Joined</th>
                <th>Number orderd</th>
                <th>ACTION</th>
            </tr>
            <tr> {{--Cho foreach chạy tại đây--}}
                <td>
                    <div class="lc-customer">
                        <img src="{{asset('images/avatar.jpg')}}" alt="nike">
                        <div class="lc-name-description">
                            <h3>Frank Willams</h3>
                            <p>Customer</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="lc-category">
                        <p>D25, Tan Phong, District 7</p>
                        <p>059676583</p>
                    </div>
                </td>
                <td>
                    <p>#21547623</p>
                </td>
                <td>
                    <p>4/9/2023</p>
                </td>
                <td>
                    <p>40</p>
                </td>
                <td>
                    <button type="button" class="remove">Remove</button>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
