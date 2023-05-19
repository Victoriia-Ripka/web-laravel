

<?php $__env->startSection('title', 'Order'); ?>

<?php $__env->startSection('content'); ?>
<div>
    <h1>Your order</h1>
    <?php if(!empty($order)): ?>
        <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <p><?php echo e($item); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <p>You haven't add anything to your order</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vika\AppData\Roaming\Composer\vendor\laravel\web-laravel\resources\views//order.blade.php ENDPATH**/ ?>