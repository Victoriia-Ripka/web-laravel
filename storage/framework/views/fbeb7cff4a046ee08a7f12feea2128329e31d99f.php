
<?php $__env->startSection('title', 'Drinks'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <h1>Drinks</h1>
    <?php if(!empty($listOfDrinks)): ?>
        <?php $__currentLoopData = $listOfDrinks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <p><?php echo e($item); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <p>Sorry, we don't have drinks in our storage now. Please, check it tommorow</p>
    <?php endif; ?>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vika\AppData\Roaming\Composer\vendor\laravel\web-laravel\resources\views/drinks.blade.php ENDPATH**/ ?>