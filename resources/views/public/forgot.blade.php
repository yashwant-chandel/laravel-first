@extends('home')
@section('insert')
<div class="container col-md-6">
	<strong>

	<div class="form-box">
		<?php print_r(Session::get('success')); ?>
		<h2 class="text-center hide-on-mobile wow fadeInUp">Forgot Password</h2>
		    <div class="contact-form wow fadeInUp">
				<form action="<?php echo url('requestotp'); ?>" method="post">
                @csrf
					<div class="form-group">
						<input type="email" class="form-control " id="email" name="email" placeholder="email"/>
						@if($errors->has('email'))
							<span class="text-danger">{{$errors->first('email')}}</span>
						@endif
					</div>
					
						<button type="submit" class="btn">Submit</button>
				</form>
			</div>
	</div>
</div>


@endsection
