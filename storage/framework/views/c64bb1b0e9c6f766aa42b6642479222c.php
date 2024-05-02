<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoe Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
</head>

<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary-subtle px-4 py-4 ">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/men')); ?>">Men</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/woman')); ?>">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/kids')); ?>">Kids</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link fas fa-search" href="#"></a>
                    <a class="nav-item nav-link fas fa-shopping-cart" href="#"></a>
                    <a class="nav-item nav-link fas fa-user" href="#"></a>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Shoe Shop<a class="text-dark" href="#"></a>
        </div>
    </footer>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\TDTU\HK4\Web\CK_WEB\resources\views/layouts/client.blade.php ENDPATH**/ ?>