@extends('Admin/AdminPanel')
@section('admin')

<div class="container col-md-7">

<?php

// echo $id;
$session = Session::get('user');
        // print_r($session[0]);
		$data = (array) $session[0];
		// print_r($data);
		// echo $data['id'];
		print_r($message);
		?>
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
						   <input type="file" class="form-control" name="project_image" id="project_image" Required>
						  </div>
						  <button type="submit" class="btn btn-sm btn-success">Submit</button>
						</form>
						</div>
					</div>
</div>

@endsection
