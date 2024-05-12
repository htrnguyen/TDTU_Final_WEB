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
                <img id="frame" src ="{{ asset('images/dashboard-frame-avt.png') }}" alt="frame">
                <img id="avatar" src="{{ asset('images/avatar.jpg') }}" alt="">
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
                <h4> {{ $date }}</h3>
            </div>
            <div class="dashboard-image">
                <img src="{{ asset('images/dashboard_1.png') }}" alt="">
                <div class="dashboard-image-text">
                    <h2>Hi, <span>My admin...</span></h2>
                    <p>You have <span>4</span> tasks to finish all task today, Your <br> aldready completed <span>50%</span>
                        tasks for today. Your <br> progress is <span>very good.</span> </p>
                </div>
            </div>
            <div class="chart-activity-progress">
                <div class="chart-activity chart">
                    <canvas id="linechart" ></canvas>
                </div>
                <div class="chart-progress chart">
                    <div class="cp-child">
                        <h2>Progress</h2>
                        <canvas id="circlechart" ></canvas>
                    </div>
                    <div class="cp-child">
                        <div class="cp-child-1">
                            <div class="cp-child-1-info">
                                <h3>70%</h3>
                                <p>Project</p>
                            </div>
                            <img src="{{ asset('images/dashboard-iconChart1.png') }}" alt="chart">
                        </div>
                        <div class="cp-child-1">
                            <div class="cp-child-1-info">
                                <h3>50+</h3>
                                <p>Clients</p>
                            </div>
                            <img src="{{ asset('images/dashboard-iconChart2.png') }}" alt="chart">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tracking-details">
                <div class="tracking">
                    <h3>Tracking</h3>
                    <p>20 hours, 30 min on this week</p>
                    <div class="tracking-barchart">
                        <h4>1,250 Followers <span>This week</span> </h4>
                        <canvas id="barchart" height="200vh" width="350vh"></canvas>
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
                            <h3>{{ $hours }}</h3>
                        </div>
                        <div class="most-tracking-content-child">
                            <div class="most-tracking-content-child-details">
                                <h4>Make new homepage</h4>
                                <p>Shoestore.com</p>
                            </div>
                            <h3>{{ $hours }}</h3>
                        </div>
                        <div class="most-tracking-content-child">
                            <div class="most-tracking-content-child-details">
                                <h4>Make new homepage</h4>
                                <p>Shoestore.com</p>
                            </div>
                            <h3>{{ $hours }}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Get the canvas element
            var ctx = document.getElementById('linechart').getContext('2d');
            var ctx_circle = document.getElementById('circlechart').getContext('2d');
            var ctx_bar = document.getElementById('barchart').getContext('2d');
            var trackingData = [100, 150, 200, 250, 300, 200,
            150]; // Dữ liệu mẫu: Số lượng truy cập cho từng ngày từ thứ hai đến chủ nhật
            var myBarChart = new Chart(ctx_bar, {
                type: 'bar',
                data: {
                    labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'Visitors',
                        data: trackingData,
                        backgroundColor: '#87A922',
                        borderColor: '#BFEA7C',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });


            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'Activity',
                        data: [100, 200, 150, 300, 250, 400, 350],
                        backgroundColor: '#BFEA7C', // Fill color
                        borderColor: '#114232', // Line color
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                font: {
                                    size: 12, // Kích thước font chữ
                                    family: 'Montserrat' // Font chữ
                                },
                                color: 'green' // Màu của nhãn
                            }
                        }
                    }
                }
            });

            var myCircleChart = new Chart(ctx_circle, {
                type: 'doughnut',
                data: {
                    labels: ['Profit', 'Cost'],
                    datasets: [{
                        label: 'My Dataset',
                        data: [12, 19],
                        backgroundColor: [
                            '#9BCF53', // Xanh lá cây nhạt
                            '#416D19', // Xanh lá cây
                        ],
                        borderColor: [
                            '#9BCF53', // Xanh lá cây
                            '#416D19', // Xanh lá cây nhạt
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    maintainAspectRatio: false,
                }
            });
        </script>
    @endsection
