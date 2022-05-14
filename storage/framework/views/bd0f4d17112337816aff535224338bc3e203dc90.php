<div class="row m-2" >
	<?php
		$image=\App\Models\Image::where('user_id', Auth::user()->id)->orderBy('no_of_likes', 'desc')->get();
	?>
	<?php if(count($image)>0): ?>
		<?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		  <div class="col-3 p-2">
		    <img src='<?php echo e(asset("public/$img->image_path")); ?>' class="card-img-top" alt="..." style="width:200px; height:200px;">
		  </div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
<div class="row m-2" ><?php /**PATH C:\xampp\htdocs\sunshine\resources\views/user_image_section.blade.php ENDPATH**/ ?>