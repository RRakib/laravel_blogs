<?php $__env->startSection("content"); ?>

    <h1 class="mt-4">Write Blogs</h1>

    <form action="<?php echo e(route("submitBlogs")); ?>" method="post">

        <?php echo e(csrf_field()); ?>


        <input type="text" name="title" class="form-control my-3" placeholder="Title" />
        <textarea type="text" name="body" class="form-control my-3" placeholder="Body"></textarea>

        <div class="d-flex align-items-center">
            <button type="submit" class="btn btn-primary px-4">Add</button>
            <a href="<?php echo e(route("blogs")); ?>" class="btn ml-2 btn-secondary">Back</a>
        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.blog", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ThemeXpert\laravel_blogs\resources\views/blogPages/createBlogs.blade.php ENDPATH**/ ?>