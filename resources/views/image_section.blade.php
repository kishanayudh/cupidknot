<div class="row m-2" >
	@php
		$image=\App\Models\Image::orderBy('no_of_likes', 'desc')->get();
	@endphp
	@if(count($image)>0)
		@foreach($image as $img)
		  <div class="col-3 p-2">
		    <img src='{{ asset("public/$img->image_path") }}' class="card-img-top" alt="..." style="width:200px; height:200px;">
		    <div class="m-1 text-center">
		      <a href="javascript:void(0)" onclick="ca({{ $img->id }})" id="lk" class="lk btn btn-sm btn-primary">Like</a>
		    </div>
		  </div>
		@endforeach
	@endif
<div class="row m-2" >