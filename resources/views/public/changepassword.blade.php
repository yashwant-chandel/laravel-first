@extends('home')
@section('insert')
<div class="container col-md-6">
	
	<div class="form-box">
		<h2 class="text-center hide-on-mobile wow fadeInUp">Change Password</h2>
		    <div class="contact-form wow fadeInUp">
				<form action="<?php echo url('/user/passwordchange'); ?>" method="post">
                @csrf
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="********"/>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="********"/>
					</div> 
                    <div class="form-group">
						<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="********"/>
					</div> 
						<button type="submit" class="btn">Change</button>
				</form>
			</div>
	</div>
</div>


@endsection
