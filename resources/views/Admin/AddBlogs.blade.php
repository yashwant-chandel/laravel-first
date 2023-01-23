@extends('Admin/admin')
@section('admin')

<div class="container col-md-7">
<?php if($message){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>
<?php

// echo $id;
$session = Session::get('user');
        // print_r($session[0]);
		$data = (array) $session[0];
		// print_r($data);
		// echo $data['id'];
		
		?>
		@foreach ($errors->all() as $error)
       					 <div>{{ $error }}</div>
   						 @endforeach
					<div class="form-box">
						<h2 class="text-center hide-on-mobile wow fadeInUp">Add Blogs</h2>
						<div class="contact-form wow fadeInUp">
						<form action="<?php echo url('/blogs'); ?>" method="post" enctype="multipart/form-data">
						@csrf
							<div class="form-group">
								<input type="hidden" name="id" value="{{$id}}">
								<input type="hidden" name="posted_by" value="<?php echo $data['name']; ?>" Required>
								
							<label for="heading">Heading</label>
						    <input type="text" class="form-control" name="heading" id="heading" placeholder="" Required>
							@if($errors->has('Tags_name'))
							<span class="text-danger">{{$errors->first('heading')}}</span>
							@endif 
						</div>
						  <div class="form-group">
						  <label for="description">Description</label>
							<textarea class="ckeditor form-control" id="description" name="description"></textarea Required>
						  </div>
						  
						  <div class="form-group">
						  <label for="Short_notice">Short Notice</label>
							<textarea class=" ckeditor form-control" id="short_notice" name="short_notice"  maxleangth="40" minlength="39" Required></textarea>
						  </div>
						  <div class="form-group">
						  <label for="exampleInputName1">Blog image</label>
						   <input type="file" class="form-control" name="img" id="project_image" Required>
						   <span style="font-size:10px;" class="text-danger">*Required 884 X 500 px</span>
						   @if($errors->has('img'))
							<span class="text-danger">{{$errors->first('img')}}</span>
							@endif 
						  </div>
						  <button type="submit" class="btn btn-sm btn-success">Submit</button>
						</form>
						</div>
					</div>
</div>

@endsection
