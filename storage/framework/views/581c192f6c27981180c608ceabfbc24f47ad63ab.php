<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="<?php echo e(asset("css/app.css")); ?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="bg-white shadow-sm">
        <div class="container">
            <div class="row py-3">
                <a class="d-flex align-items-center text-decoration-none col-md-3" href="/"><h3 class="mb-0 text-info">Buggy<b>Blogs</b></h3></a>
                <div class="col-md-9 d-flex justify-content-end align-items-center">

                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                            <li class="nav-item list-unstyled">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php else: ?>

                        <a class="mx-4 mb-0" href=<?php echo e(route("blogs")); ?>>Blogs</a>
                        <li class="nav-item dropdown list-unstyled">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </nav>
    <div class="mt-4 container">
        <?php echo $__env->yieldContent("content"); ?>
    </div>


    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</body>
</html>
<?php /**PATH D:\ThemeXpert\laravel_blogs\resources\views/layouts/blog.blade.php ENDPATH**/ ?>