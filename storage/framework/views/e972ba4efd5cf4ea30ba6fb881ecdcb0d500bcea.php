<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><?php echo e(__('Load Image')); ?></div>
                <div class="card-body">
                    <form id="shop" class="" action="<?php echo e(route('upload.image')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-primary"><?php echo e('Upload'); ?></button>
                                </div>
                            </div>
                    </form>
                    <div class="text-center text-success mt-4">
                        <?php if(session('message')): ?>
                            <?php echo e(session('message')); ?>

                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="user_image_section">
                
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $.post('<?php echo e(route('user.image.section')); ?>', {_token:'<?php echo e(csrf_token()); ?>'}, function(data){
            $('#user_image_section').html(data);
        });
    });
</script> 
<?php $__env->stopSection(); ?>
   


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sunshine\resources\views/home.blade.php ENDPATH**/ ?>