<?php if(!empty($breadcrumbs)): ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($url): ?>
                    <li class="breadcrumb-item"><a href="<?php echo e($url); ?>"><?php echo e($label); ?></a></li>
                <?php else: ?>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($label); ?></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>
    </nav>
<?php endif; ?>
<?php /**PATH C:\Users\ADMIN\Documents\TDTU_IT\HK2-2\Web\CK_WEB\resources\views/partials/breadcrumbs.blade.php ENDPATH**/ ?>