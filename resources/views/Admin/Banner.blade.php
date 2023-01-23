@extends('Admin/admin')
@section('admin')
<div class="container col-8">
<div class="card-body">
  
  <?php print_r($success); ?>
 
                  <h2 class="card-title text-center">Upload Banner</h2>
                  <form class="forms-sample" action="<?php echo url('banner'); ?>" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">About</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="about_banner" maxlength="50" Required >
                      @if($errors->has('about_banner'))
                    <span class="text-danger">{{$errors->first('about_banner')}}</span>
                    @endif 
                    </div>
                    <div class="form-group">
                      <label for="slug-text">url</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="url" Required >
                      @if($errors->has('url'))
                      <span class="text-danger">{{$errors->first('url')}}</span>
                      @endif 
                    </div>
                    <div class="form-group">
                      <label for="slug-text">Product Image</label>
                      <input type="file" class="form-control" id="exampleFormControlInput1" name="banner_img" Required>
                      <span style="font-size:10px;" class="text-danger">*Required 1920 X 466 px</span>
                      @if($errors->has('banner_img'))
                      <span class="text-danger">{{$errors->first('banner_img')}}</span>
                      @endif 
                    </div>
                    <button type="submit" id="btn" class="btn btn-success btn-sm">Submit</button>
                   
                  </form>
  </div>

</div>


@endsection

        <!-- <div class="newletter-content text-center wow fadeInUp">
										<h2>Banner</h2> 
										<form method="post" action="<?php echo url('/banner'); ?>" enctype="multipart/form-data">
										@csrf	
										<input type="text" class="form-control" id="exampleFormControlInput1" name="about_banner" placeholder="Description" >
										<input type="text" class="form-control" id="exampleFormControlInput1" name="url" placeholder="url" >
											<input type="file" class="form-control" id="exampleFormControlInput1" name="product_banner">
											<button class="btn btn-dark" >submit</button>
										</form>
									</div>	