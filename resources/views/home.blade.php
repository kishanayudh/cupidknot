@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Load Image') }}</div>
                <div class="card-body">
                    <form id="shop" class="" action="{{route('upload.image')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-primary">{{'Upload'}}</button>
                                </div>
                            </div>
                    </form>
                    <div class="text-center text-success mt-4">
                        @if(session('message'))
                            {{ session('message') }}
                        @endif
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
        $.post('{{ route('user.image.section') }}', {_token:'{{ csrf_token() }}'}, function(data){
            $('#user_image_section').html(data);
        });
    });
</script> 
@endsection
   

