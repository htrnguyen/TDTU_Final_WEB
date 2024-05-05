@extends('layouts.admin')
@section('container-sidebar-dashboard')
    <div class="container-sidebar-dashboard">
        <div class="my-profile">
            <div class="title-profile">
                <h3>My Profile</h3>
                <i class="fa-solid fa-ellipsis"></i>
            </div>
            <div class="complete-profile">
                <p> <span>75%</span> Complete your profile </p>
            </div>
            <div class="image-profile">
                <img id="frame" src ="{{asset('images/dashboard-frame-avt.png')}}" alt="frame">
                <img id="avatar" src="{{asset('images/avatar.jpg')}}" alt="">
                <h3>Nhật Toàn</h3>
                <p>Administrator</p>
            </div>
        </div>
        <div class="proceed-information">
            <div class="proceed-information-content">
                <div class="pic-product proceed">
                    <i class="fa-solid fa-box-open"></i>
                    <div class="product-info">
                        <h3>20</h3>
                        <p>Product</p>
                    </div>
                </div>
                <div class="pic-customer proceed">
                    <i class="fa-solid fa-users"></i>
                    <div class="customer-info">
                        <h3>100</h3>
                        <p>Customer</p>
                    </div>
                </div>
                <div class="pic-order proceed">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <div class="order-info">
                        <h3>50</h3>
                        <p>Order</p>
                    </div>
                </div>
                <div class="pic-revenue proceed">
                    <i class="fa-solid fa-chart-simple"></i>
                    <div class="revenue-info">
                        <h3>$1000</h3>
                        <p>Revenue</p>
                    </div>
                </div>
            </div>
    </div>
@endsection

@section('container-main')
    <div class="container-main-dashboard">
        <div class="title-main">
            <div class="tm-child">
                <h3>Dashboard</h3>
                <p>Overview of Dashboard</p>
            </div>
            <h4> {{$date}}</h3>
        </div>
        <div class="dashboard-image">
            <img src="{{asset('images/dashboard_1.png')}}" alt="">
            <h2>Hi, <span>My admin...</span></h2>
            <p>You have <span>4</span> tasks to finish all task today, Youraldready completed <span>50%</span> tasks for today. Your <br> progress is <span>very good.</span> </p>
        </div>
        <div class="chart-activity-progress">
            <div class="chart-activity chart">
                <canvas id="linechart"></canvas>
            </div>
            <div class="chart-progress chart">
                <div class="cp-child">
                    <h2>Progress</h2>
                    <canvas id="circlechart" width="170px" height="170px"></canvas>
                </div>
                <div class="cp-child">
                    <div class="cp-child-1">
                        <div class="cp-child-1-info">
                            <h3>70%</h3>
                            <p>Project</p>
                        </div>
                        <img src="{{asset('images/dashboard-iconChart1.png')}}" alt="chart">
                    </div>
                    <div class="cp-child-1">
                        <div class="cp-child-1-info">
                            <h3>50+</h3>
                            <p>Clients</p>
                        </div>
                        <img src="{{asset('images/dashboard-iconChart2.png')}}" alt="chart">
                    </div>
                </div>
            </div>
        </div>
        <div class="tracking-details">
            <div class="tracking">
                <h3>Tracking</h3>
                <p>20 hours, 30 min on this week</p>
                <div class="tracking-barchart">
                    <h3>$1,250 <span>This week</span> </h3>
                    <canvas id="barchart"></canvas>
                </div>
            </div>
            <div class="most-tracking">
                <h3>Most Tracked</h3>
                <p>13 Jan, 19 Jan 2024</p>
                <div class="most-tracking-content">
                    <div class="most-tracking-content-child">
                        <div class="most-tracking-content-child-details">
                            <h4>Make new homepage</h4>
                            <p>Shoestore.com</p>
                        </div>
                        <h3>{{$hours}}</h3>
                    </div>
                    <div class="most-tracking-content-child">
                        <div class="most-tracking-content-child-details">
                            <h4>Make new homepage</h4>
                            <p>Shoestore.com</p>
                        </div>
                        <h3>{{$hours}}</h3>
                    </div>
                    <div class="most-tracking-content-child">
                        <div class="most-tracking-content-child-details">
                            <h4>Make new homepage</h4>
                            <p>Shoestore.com</p>
                        </div>
                        <h3>{{$hours}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection