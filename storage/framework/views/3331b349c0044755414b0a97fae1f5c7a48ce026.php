<?php $__env->startSection("content"); ?>

    <h1 class="mt-4">
        <?php if(@empty($blog)): ?>
            Write Blogs
        <?php else: ?>
            Update Blog
        <?php endif; ?>
    </h1>


    <?php if(@empty($blog)): ?>
        <form action="<?php echo e(route("submitBlogs")); ?>" method="post">
    <?php else: ?>
        <form action="<?php echo e(route("updateBlog", $blog["id"])); ?>" method="post">
    <?php endif; ?>

            <?php echo e(csrf_field()); ?>


            <input type="text" name="title" class="form-control my-3" placeholder="Title" value="<?php if(isset($blog)): ?> <?php echo e($blog["title"]); ?> <?php endif; ?>" />
            <textarea type="text" name="body" class="form-control my-3" placeholder="Body"><?php if(isset($blog)): ?><?php echo e($blog["body"]); ?> <?php endif; ?></textarea>

            <div class="d-flex align-items-center">
                <?php if(@empty($blog)): ?>
                    <button type="submit" class="btn btn-primary px-4">Add</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary px-4">Update</button>
                <?php endif; ?>

                <a href="<?php echo e(route("blogs")); ?>" class="btn ml-2 btn-secondary">Back</a>
            </div>

        </form>

<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.blog", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ThemeXpert\laravel_blogs\resources\views/blogPages/createBlogs.blade.php ENDPATH**/ ?>