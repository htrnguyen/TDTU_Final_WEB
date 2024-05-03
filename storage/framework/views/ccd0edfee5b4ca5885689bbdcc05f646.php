<style>
    .breadcrumb {
        background: none;
        padding: 10px 15px;
        margin-bottom: 20px;
        list-style: none;
        border-radius: 0;
    }

    .breadcrumb a {
        color: #0275d8;
        text-decoration: none;
    }

    .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: ">";
        padding: 0 5px;
        color: #666;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }
</style>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb
        -item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page
        ">
            <?php echo $__env->yieldContent('title'); ?>
        </li>
    </ol>
</nav>
<?php /**PATH C:\Users\ADMIN\Documents\TDTU_IT\HK2-2\Web\CK_WEB\resources\views/partials/breadcrumb.blade.php ENDPATH**/ ?>