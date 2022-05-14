<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sunshine</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">
        <div class="bg-gray-100 py-4">
            <?php if(Route::has('login')): ?>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="text-lg text-gray-700 dark:text-gray-500 underline">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="text-lg text-gray-700 dark:text-gray-500 underline">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="ml-4 text-lg text-gray-700 dark:text-gray-500 underline">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="container" id="image_section">
                
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
                $.post('<?php echo e(route('image.section')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                    $('#image_section').html(data);
                });
            });

            function ca(id){
                $.post('<?php echo e(route('like.image')); ?>', {_token:'<?php echo e(csrf_token()); ?>', id:id}, function(data){
                    if(data==1){
                        $.post('<?php echo e(route('image.section')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
                            $('#image_section').html(data);
                        });
                    }
                });
            }
        </script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\sunshine\resources\views/welcome.blade.php ENDPATH**/ ?>