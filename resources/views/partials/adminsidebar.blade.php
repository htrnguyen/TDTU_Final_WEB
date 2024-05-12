<div class="container-sidebar">
    <div class="logo">
        <img src="{{asset('images/logo.png') }}" alt="">
        <p>Shoe Store</p>
    </div>

    <div class="cs-create-new-task">
        <p>Create new task</p>
        <button>
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    <a href="{{route('home_admin')}}" class="dashboard">
        <i class="fa-solid fa-grip"></i>
        <p>Dashboard</p>
    </a>
    <a href="{{route('product_admin')}}">
        <i class="fa-solid fa-boxes-stacked"></i>
        <p>Product</p> 
    </a>
    <a href="{{route('coupon_admin')}}" class="coupon">
        <i class="fa-solid fa-gift"></i>
        <p>Coupon</p>
    </a>
    <a href="{{route('tasklist_admin')}}" class="tasklist">
        <i class="fa-solid fa-bars-progress"></i>
        <p>Task List</p>
    </a>
    <a href="{{route('customer_admin')}}" class="customer">
        <i class="fa-solid fa-user"></i>
        <p>Customer</p>
    </a>
    <a href="{{route('setting_admin')}}" class="setting">
        <i class="fa-solid fa-cog"></i>
        <p>Setting</p>
    </a>
    <a href="{{route('login_admin')}}" class="logout" id="logout" onclick="logout(event)">
        <i class="fa-solid fa-right-from-bracket"></i>
        <p>Logout</p>
    </a>
</div>
