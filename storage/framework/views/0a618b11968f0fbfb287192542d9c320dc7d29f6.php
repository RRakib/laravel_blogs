<?php $__env->startSection("content"); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <div class="d-flex align-items-center justify-content-between">
            <h1>Blog Page</h1> <a class="ml-4 btn btn-outline-secondary" href="<?php echo e(route("create_blog")); ?>">Create Blog</a>
        </div>

        <?php if(count($blogs) != 0): ?>
        <div class="mt-2 border rounded">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" px-2 py-1 rounded border-bottom">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <a class="text-decoration-none" href=<?php echo e(route("blogDetails", $blog["id"])); ?>><h5 class="m-0 font-weight-bold"><?php echo e($blog["title"]); ?></h5></a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-info px-2 py-0 mr-2" href=<?php echo e(route("editBlog", $blog["id"])); ?> >
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="15" height="15" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path d="M481.996,30.006C462.647,10.656,436.922,0,409.559,0c-27.363,0-53.089,10.656-72.438,30.005L50.826,316.301    c-2.436,2.436-4.201,5.46-5.125,8.779L0.733,486.637c-1.939,6.968,0.034,14.441,5.163,19.542c3.8,3.78,8.892,5.821,14.106,5.821    c1.822,0,3.66-0.25,5.463-0.762l161.557-45.891c6.816-1.936,12.1-7.335,13.888-14.192c1.788-6.857-0.186-14.148-5.189-19.167    L93.869,329.827L331.184,92.511l88.258,88.258L237.768,361.948c-7.821,7.8-7.838,20.463-0.038,28.284    c7.799,7.822,20.464,7.838,28.284,0.039l215.98-215.392C501.344,155.53,512,129.805,512,102.442    C512,75.079,501.344,49.354,481.996,30.006z M143.395,436.158L48.827,463.02l26.485-95.152L143.395,436.158z M453.73,146.575    l-5.965,5.949l-88.296-88.297l5.938-5.938C377.2,46.495,392.88,40,409.559,40c16.679,0,32.358,6.495,44.152,18.29    C465.505,70.083,472,85.763,472,102.442C472,119.121,465.505,134.801,453.73,146.575z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                                </g>
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                            </g>
                                        </g></svg>
                                </a>
                                <form action="<?php echo e(route("delete_blogs")); ?>" method="post">

                                    <?php echo e(csrf_field()); ?>


                                    <input type="hidden" name="id" value="<?php echo e($blog["id"]); ?>">

                                    <button type="submit" class="btn px-2 py-0 btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="15" height="15" x="0" y="0" viewBox="0 0 477.867 477.867" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M443.733,68.267H324.267V51.2c0-28.277-22.923-51.2-51.2-51.2H204.8c-28.277,0-51.2,22.923-51.2,51.2v17.067H34.133    c-9.426,0-17.067,7.641-17.067,17.067S24.708,102.4,34.133,102.4h18.551l32.649,359.953c0.805,8.814,8.216,15.55,17.067,15.514    h273.067c8.851,0.037,16.261-6.699,17.067-15.514L425.182,102.4h18.552c9.426,0,17.067-7.641,17.067-17.067    S453.159,68.267,443.733,68.267z M187.733,51.2c0-9.426,7.641-17.067,17.067-17.067h68.267c9.426,0,17.067,7.641,17.067,17.067    v17.067h-102.4V51.2z M359.885,443.733H117.982L87.04,102.4h83.627h220.245L359.885,443.733z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M187.738,391.392c-0.002-0.023-0.003-0.047-0.005-0.07l-17.067-238.933c-0.669-9.426-8.853-16.524-18.278-15.855    c-9.426,0.669-16.524,8.853-15.855,18.278L153.6,393.745c0.637,8.949,8.095,15.878,17.067,15.855h1.229    C181.299,408.947,188.392,400.795,187.738,391.392z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M238.933,136.533c-9.426,0-17.067,7.641-17.067,17.067v238.933c0,9.426,7.641,17.067,17.067,17.067    S256,401.959,256,392.533V153.6C256,144.174,248.359,136.533,238.933,136.533z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M325.478,136.533c-9.426-0.669-17.609,6.429-18.278,15.855l-17.067,238.933c-0.691,9.4,6.369,17.581,15.769,18.272    c0.029,0.002,0.057,0.004,0.086,0.006h1.212c8.972,0.023,16.43-6.906,17.067-15.855l17.067-238.933    C342.003,145.386,334.904,137.203,325.478,136.533z" fill="#ffffff" data-original="#000000" style="" class=""/>
                                                    </g>
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                                <g xmlns="http://www.w3.org/2000/svg">
                                                </g>
                                            </g></svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <p class="pr-5 text-dark mb-1">
                            <?php echo e(substr($blog["body"], 0, 50)); ?>...
                        </p>

                        <small class="small text-muted"><?php echo e($blog["created_at"]); ?></small>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php else: ?>
            <h1 class="border-top pt-4">No Blogs</h1>
        <?php endif; ?>
    </body>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.blog", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ThemeXpert\laravel_blogs\resources\views/blogPages/blogs.blade.php ENDPATH**/ ?>