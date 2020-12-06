<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="bg-white shadow-sm">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-3"><h3 class="mb-0">BuggyBlogs</h3></div>
                <div class="col-md-9 d-flex justify-content-end align-items-center">
                    <a class="mx-4 mb-0" href=<?php echo e(route("landing")); ?>>Landing</a>
                    <a class="mx-4 mb-0" href=<?php echo e(route("blogs")); ?>>Blogs</a>
                    <a class="mx-4 mb-0" href=<?php echo e(route("about")); ?>>About</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="mt-4 container">
        <?php echo $__env->yieldContent("content"); ?>
    </div>
</body>
</html>
<?php /**PATH D:\ThemeXpert\laravel_blogs\resources\views/layouts/blog.blade.php ENDPATH**/ ?>