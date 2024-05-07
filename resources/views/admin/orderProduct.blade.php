@extends('layouts.admin')
<script src="{{asset('js/admin/scriptOdered.js')}}"></script>

@section('container-main')
<div class="container-main-order-product">
    <div class="back-product">
        <a href="{{route('product_admin')}}">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <div class="bp-title">
            <p>Back to Products</p>
            <h2>Orders</h2>
        </div>
    </div>
    <div class="header-order-product">
        <div class="hop-search">
            <i class="fa-solid fa-search"></i>
            <input type="text" placeholder="Enter order ID to search">
        </div>
        <div class="hop-fresh-report">
           <div class="hop-fresh" id="fresh-order">
            <i class="fa-solid fa-arrows-rotate"></i>
            <p>Refresh</p>
           </div>
           <div class="hop-report" id="report-order">
            <i class="fa-solid fa-chart-pie"></i>
            <p>Report</p>
           </div>
        </div>
    </div>
    <div class="list-product-ordered">
        <table>
            <tr>
                <th>
                    PRODUCT DETAILS
                </th>
                <th>ORDER ID</th>
                <th>ORDER BY</th>
                <th>CREATE</th>
                <th>AMOUNT</th>
                <th>ACTION</th>
            </tr>
            <tr> {{--Cho foreach chạy tại đây--}}
                <td>
                    <div class="lpo-product">
                        <img src="{{asset('images/product-nike.png')}}" alt="nike">
                        <div class="lpo-name-description">
                            <h3>Nike Air Max 270c</h3>
                            <p>Fresh, Comfortable, New item</p>
                        </div>
                    </div>
                </td>
                <td class="lpo-orderid">
                    <p>#2161516551</p>
                </td>
                <td>
                    <div class="lpo-orderby">
                        <p style="font-weight: bold">John Doe</p>
                        <p>D7, Nguyen Huu Tho, District 7</p>
                    </div>
                </td>
                <td class="lpo-created">
                    <p>19:05:34</p>
                </td>
                <td>
                    <div class="lpo-">
                        <p>$40</p>
                        <p>Paid</p>
                    </div>
                </td>
                <td class="lpo-action">
                    <button type="button" class="action-order">View</button>
                </td>
            </tr>
        </table>
    </div>
    <div class="mask-for-view"></div>
    <div class="view-ordered-details">
        <i class="fa-solid fa-xmark cancel-icon"></i>
        <div class="vod-header">
            <img src="{{asset('images/Jordan.png')}}" alt="">
            <p>In progress</p>
        </div>
        <div class="vod-information">
            <h3>Order #1165665</h3>
            <div class="vod-details">
                <div class="vod-details-left">
                    <div class="vod-item">
                        <h4>Item</h4>
                        <p>Sneaker Nike Air Jordan</p>
                    </div> 
                    <div class="vod-time">
                        <h4>Order Time</h4>
                        <p>19:05:34</p>
                    </div> 
                </div>
                <div class="vod-details-right">
                    <div class="vod-name">
                        <h4>Customer</h4>
                        <p>John Doe</p>
                    </div>
                    <div class="vod-address">
                        <h4>Address</h4>
                        <p>D7, Nguyen Huu Tho, District 7</p>
                    </div>
                </div>
            </div>
            <div class="vod-describe-shortly">
                <h4>Product Details</h4>
                <p>Air Jordan sneakers have transcended their original purpose as basketball shoes and have become a fashion statement, worn by athletes, celebrities, and sneaker enthusiasts around the world. The brand continues to release new iterations and collaborations, maintaining its status as a cultural icon in the world of sneakers and streetwear.</p>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.action-order').forEach((item, index) => {
    item.addEventListener('click', () => {
        var maskForView = document.querySelector('.mask-for-view');
        var viewOrdered = document.querySelector('.view-ordered-details'); // Removed the extra ' in this line
        maskForView.style.visibility = 'visible';
        viewOrdered.style.visibility = 'visible';
        });
    });

    document.querySelectorAll('.cancel-icon').forEach((item, index) => {
        item.addEventListener('click', () => {
            document.querySelector('.mask-for-view').style.visibility = 'hidden';
            document.querySelector('.view-ordered-details').style.visibility = 'hidden';   
        });
    });

    document.getElementById('fresh-order').addEventListener('click', () => {
        location.reload();
    });
</script>
@endsection