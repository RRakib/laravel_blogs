<?php $__env->startSection("content"); ?>

    <h1 class="mt-4"><?php echo e($blog["title"]); ?></h1>
    <p><?php echo e($blog["body"]); ?></p>
    <small><?php echo e($blog["created_at"]); ?></small>
    <br />
    <a href="<?php echo e(route("blogs")); ?>" class="btn px-4 mt-3 btn-secondary">Back</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.blog", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ThemeXpert\laravel_blogs\resources\views/blogPages/blogDetails.blade.php ENDPATH**/ ?>