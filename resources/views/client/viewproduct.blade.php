@extends('layouts.client')

@section('title', 'Men Collection')
@section('content')
    <!-- Main Content -->
    
    <!-- Banner Section -->
    <div class="container">
        <div class="container-view-product">
            <div class="view-poduct-image">
                <div class="vp-image-secondary">
                    <img src="{{asset('images/men-shoes.jpg')}}" alt="hinh1" class="image-sec">
                    <img src="{{asset('images/men-shoes.jpg')}}" alt="hinh2" class="image-sec">
                    <img src="{{asset('images/men-shoes.jpg')}}" alt="hinh3" class="image-sec">
                </div>
                <img src="{{asset('images/product-nike.png')}}" alt="Hinh goc" id="image-main" class="image-main">
                    </div>
                    <div class="view-product-info">
                        <div class="name-rate">
                            <h2 class="product-name">Giày Nike Jordan</h2>
                            <div class="rate-five-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                        <p class="product-price">250000đ</p>
                        <div class="choose-color">
                            <p>Màu sắc</p>
                            <div class="color">
                                <div class="color-1"></div>
                                <div class="color-2"></div>
                                <div class="color-3"></div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="description-name">
                                <p id="material">Chất liệu</p>
                                <p id="shipping">Giao hàng</p>
                                <p id="returnOrder">Hoàn trả</p>
                            </div>
                            <p id="content">Chèn nội dung vào đây</p>
                        </div>
                        <div class="quantity-add">
                            <div class="quantity-choose">
                                <button id="decrease">-</button>
                                <input type="text" value="1" id="procId">
                                <button id="increase">+</button>
                            </div>
                            {{-- Form type input hidden để lấy dữ liệu --}}
                            <form action="#" method="post">
                                <button type="submit" name="addtocartView" value="Thêm giỏ hàng" class="btn-add">Thêm sản
                                    phẩm</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="container-product-description">
                    <div class="title-description">
                        <p>Mô tả sản phẩm</p>
                        <p>Chính sách bảo hành</p>
                        <p>Đánh giá</p>
                    </div>
                    <p>Mô tả nội dung tại đây</p>
        </div>
    </div>
    <script>

        function viewPolicy(id, content) {
            var changeContent = document.getElementById('content');
            changeContent.innerHTML = content;
        }

        var shipping = document.getElementById('shipping');
        shipping.addEventListener('click', function () {
            var content = `
      <p><strong>Phí vận chuyển:</strong> Chi phí vận chuyển sẽ phụ thuộc vào địa chỉ giao hàng và phương thức vận chuyển được chọn. Chi phí cụ thể sẽ được hiển thị trong quá trình thanh toán.</p>
      <p><strong>Thời gian giao hàng:</strong> Thời gian giao hàng có thể thay đổi tùy thuộc vào địa chỉ giao hàng và phương thức vận chuyển. Thông tin cụ thể về thời gian giao hàng sẽ được cung cấp trong quá trình đặt hàng.</p>
      <p><strong>Phương thức vận chuyển:</strong> Chúng tôi sử dụng các dịch vụ vận chuyển đáng tin cậy để đảm bảo việc giao hàng được thực hiện một cách nhanh chóng và an toàn.</p>
    `;
            viewPolicy(shipping, content);
        });

        var material = document.getElementById('material');
        material.addEventListener('click', function () {
            var content = 'Nội dung hiển thị tại đây';
            viewPolicy(material, content);
        });

        var returnOrder = document.getElementById('returnOrder');
        returnOrder.addEventListener('click', function () {
            var content = `
      <p><strong>Chính sách hoàn trả:</strong> Chúng tôi cam kết đảm bảo quyền lợi của khách hàng khi mua sản phẩm. Trong trường hợp khách hàng không hài lòng với sản phẩm đã mua, chúng tôi sẽ tiến hành hoàn trả tiền một cách nhanh chóng và thuận tiện.</p>
      <p><strong>Thời gian hoàn trả:</strong> Thời gian hoàn trả sẽ phụ thuộc vào quy định của chúng tôi và phương thức thanh toán ban đầu. Thông tin chi tiết về thời gian hoàn trả sẽ được cung cấp khi khách hàng yêu cầu hoàn trả.</p>
      <p><strong>Điều kiện hoàn trả:</strong> Để được hoàn trả, sản phẩm phải còn nguyên vẹn, không bị hư hỏng và đáp ứng các điều kiện hoàn trả của chúng tôi. Khách hàng vui lòng liên hệ với chúng tôi để biết thêm thông tin chi tiết về điều kiện hoàn trả.</p>
    `;
            viewPolicy(returnOrder, content);
        });

        // Increase and decrease quantity
        document.getElementById('increase').addEventListener('click', function () {
            var quantityInput = document.getElementById('procId');
            var currentValue = parseInt(quantityInput.value);
            currentValue++;
            quantityInput.value = currentValue;
        });

        document.getElementById('decrease').addEventListener('click', function () {
            var quantityInput = document.getElementById('procId');
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                currentValue--;
                quantityInput.value = currentValue;
            }
        });

        // Change image when hover
        var SecondaryImage = document.querySelectorAll('.image-sec');
        var srcMainImage = document.querySelector('.image-main').src;
        SecondaryImage.forEach(function (img) {
            img.addEventListener('mouseover', function () {
                var mainImage = document.querySelector('.image-main');
                mainImage.src = img.src;
            });
            img.addEventListener('mouseout', function () {
                var mainImage = document.querySelector('.image-main');
                mainImage.src = srcMainImage;
            });
        });

    </script>
    <style>
        .container-view-product {
            margin-top: 30px;
            display: flex;
            gap: 20px;
            padding: 40px 200px;
        }

        .view-poduct-image {
            display: flex;
            justify-content: space-between;
            align-items: start;
            gap: 20px;
        }

        .view-poduct-image #image-main {
            width: 500px;
            height: 500px;
            object-fit: cover;
            background-color: #e4e4e4;
            border-radius: 20px;
        }

        .vp-image-secondary {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .vp-image-secondary img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.5s;
        }

        .vp-image-secondary img:hover {
            border: 1px solid #416D19;
            cursor: pointer;
            transform: scale(0.9);
            transition: transform 0.5s;
        }

        .rate-five-star i {
            color: #ffe817;
        }

        .view-product-info {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .name-rate {
            display: flex;
            justify-content: space-between;
            align-items: start;
        }

        .name-rate h2 {
            width: 60%;
        }
        .product-price, .choose-color p {
            font-weight: bold;
        }

        .choose-color .color {
            margin-top: 15px;
            display: flex;
            gap: 10px;
        }

        .color-1 {
            background-color: #416D19;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .color-2 {
            background-color: #e4e4e4;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .color-3 {
            background-color: #0a0060;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .description-name {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 25px;
            font-weight: bold;
            padding-bottom: 10px;
            border-bottom: 1px solid #7e7e7e;
            position: relative;
        }

        .description-name p::after {
            position: absolute;
            content: '';
            width: 80px;
            height: 2px;
            background-color: #416D19;
            display: none;
            bottom: 0;
            transition: all 0.8s;
        }

        .description-name p:hover::after {
            display: block;
            transition: all 0.8s;
        }


        .description-name p:hover {
            cursor: pointer;
        }

        .description p {
            margin-top: 20px;
            font-size: 0.9rem;
        }

        .description #content {
            width: 470px;
        }

        .quantity-add {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 25px;
        }

        .quantity-choose input{
            border: none;
            width: 15px;
            font-size: 1.2rem;
            text-align: center
        }

        .quantity-choose button {
            font-size: 1.6rem;
            color: rgb(0, 0, 0);
            border: none;
            padding: 5px px;
            border-radius: 5px;
            cursor: pointer;
            background-color: transparent;
        }

        .quantity-choose {
            border: 1px solid #7e7e7e;
            border-radius: 10px;
        }

        .quantity-add .btn-add {
            background-color: #416D19;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        /* container-product-description */
        .container-product-description {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 40px 300px;
        }
        .title-description {
            display: flex;
            justify-content: start;
            gap: 30px;
            align-items: center;
            position: relative;
            border-bottom: 1px solid #7e7e7e;
            padding-bottom: 10px;
        }

        .title-description p {
            font-weight: bold;
            font-size: 1rem;

        }

        .title-description p::after {
            position: absolute;
            content: '';
            width: 170px;
            height: 2px;
            background-color: #416D19;
            display: none;
            bottom: 0;
        }

        .title-description p:hover::after {
            display: block;
            transition: all 0.8s;
        }

        .title-description p:hover {
            cursor: pointer;
        }


    </style>
    <script src="script.js"></script>
@endsection
