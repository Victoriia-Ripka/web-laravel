
<?php $__env->startSection('title', 'Pizza'); ?>
<?php $__env->startSection('content'); ?>
<div>
    <h1>Pizzas</h1>
    <?php if(!empty($listOPizzas)): ?>
        <ul>
            <?php $__currentLoopData = $listOPizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li><a href='/pizza/$item->id'><?php echo e($item->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
    <p>Sorry, we don't have pizzas in our storage now. Please, check it tommorow</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Vika\AppData\Roaming\Composer\vendor\laravel\web-laravel\resources\views/pizza.blade.php ENDPATH**/ ?>