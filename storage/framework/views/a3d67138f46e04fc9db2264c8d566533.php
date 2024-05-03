

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body px-5">
                        <h2 class="card-title text-center pt-5">Login</h2>
                        <form id="formLogin" method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                    required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">SIGN IN</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="<?php echo e(route('register')); ?>" class="text-decoration-none px-3">Create an account</a>
                            <a href="#" class="text-decoration-none px-3 text-dark">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Documents\TDTU_IT\HK2-2\Web\CK_WEB\resources\views/auth/login.blade.php ENDPATH**/ ?>