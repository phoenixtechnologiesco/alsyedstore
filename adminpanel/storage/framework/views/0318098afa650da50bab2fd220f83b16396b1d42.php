<?php $__env->startSection('content'); ?>
 <?php $r =   'web.shop-pages.shop' . $final_theme['shop']; ?>
 <?php echo $__env->make($r, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('web.common.scripts.addToCompare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\uzair.siddiq\Downloads\Laravel Ecommerce v1.0.19\SourceCode\adminpanel\resources\views/web/shop.blade.php ENDPATH**/ ?>