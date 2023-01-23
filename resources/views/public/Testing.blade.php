@extends('home')
@section('insert')
<div class="container col-md-6">
	
	<div class="form-box">
		<h2 class="text-center hide-on-mobile wow fadeInUp">Login</h2>
		    <div class="contact-form wow fadeInUp">
			
			
				<form action="<?php echo url('/testlogin'); ?>" method="post">
                @csrf
					<div class="form-group">
						<input type="email" class="form-control" id="username" name="email" placeholder="Username"/>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="********"/>
					</div> 
						<button type="submit" class="btn">Login</button>
				</form>
			</div>
	</div>
</div>


@endsection
