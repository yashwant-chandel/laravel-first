@extends('home')
@section('insert')
<div class="container col-md-6">
	
	<div class="form-box">
		<h2 class="text-center hide-on-mobile wow fadeInUp">Login</h2>
		    <div class="contact-form wow fadeInUp">
			<?php  $results = Session::get('success');
							if(isset($results)){?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>{{$results}}</strong> 
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			<?php	} ?>
				<form action="<?php echo url('/login'); ?>" method="post">
                @csrf
					<div class="form-group">
						<input type="email" class="form-control" id="username" name="username" placeholder="Username"/>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="********"/>
					</div> 
						<button type="submit" class="btn">Login</button>
						<a href="{{url('forgotpass')}}" class="btn-link">forgot Password</a>
				</form>
			</div>
	</div>
</div>


@endsection
