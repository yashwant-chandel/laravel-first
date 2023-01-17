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
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="about_banner" Required >
                    </div>
                    <div class="form-group">
                      <label for="slug-text">url</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" name="url" Required >
                    </div>
                    <div class="form-group">
                      <label for="slug-text">Product Image</label>
                      <input type="file" class="form-control" id="exampleFormControlInput1" name="product_banner" Required>
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