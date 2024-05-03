

<?php $__env->startSection('title', 'Shoe Store Home'); ?>

<?php $__env->startSection('banner'); ?>
    <div class="main-banner-home d-flex align-items-center"
        style="background-image: url('<?php echo e(asset('images/banner.png')); ?>'); height: 400px; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 text-center text-md-left px-2">
                    <h1 class="text-white">Discount 20% For All Orders Over $2000</h1>
                    <p class="text-white">Use coupon code <span class="font-weight-bold">DISCOUNT20</span></p>
                    <p class="text-white">Use coupon DISCOUNT20</p>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo e(asset('images/men-shoes.jpg')); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">$100.00</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo e(asset('images/women-shoes.jpg')); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">$150.00</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="<?php echo e(asset('images/kid-shoes.jpg')); ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">$200.00</p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Documents\TDTU_IT\HK2-2\Web\CK_WEB\resources\views//client/home.blade.php ENDPATH**/ ?>