@extends('home')
@section('insert')

<div class="container col-md-7">


					<div class="form-box">
					
						<h2 class="text-center hide-on-mobile wow fadeInUp">Sign Up</h2>
						<div class="contact-form wow fadeInUp">
						<form action ="<?php echo url('registeruser'); ?>" method="post" enctype="multipart/form-data">
						@csrf
							<div class="form-group">
								
						    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
						  </div>
                          <div class="form-group">
						    <input type="email" class="form-control" name="Username" id="email" placeholder="Username">
						  </div>
						  
                          <div class="form-group">
						    <input type="password" class="form-control" name="password" id="password" placeholder="********">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" name="password" onkeyup="passwordmatch(this.value)" id="confirmpassword" placeholder="********">
						  </div>
						  <button type="submit" class="btn"  id="registerbtn">Register</button>
						</form>
						</div>
					</div>
</div>
@endsection