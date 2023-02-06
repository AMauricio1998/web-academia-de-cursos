

<?php $__env->startSection('hero'); ?>
    <?php echo $__env->make('partials.learning.hero_cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("content"); ?>
    <?php $cart = app('App\Services\Cart'); ?>

    <div class="container">
        <?php echo $__env->make('partials.learning.cart_content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.learning", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto-base-ibero-learning\resources\views/learning/cart.blade.php ENDPATH**/ ?>