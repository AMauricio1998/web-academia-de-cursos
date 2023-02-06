

<?php $__env->startSection('hero'); ?>
    <?php echo $__env->make('partials.learning.courses.hero_single_course', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('learning.courses.single', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <hr />

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.learning', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\proyecto-base-ibero-learning\resources\views/learning/courses/show.blade.php ENDPATH**/ ?>