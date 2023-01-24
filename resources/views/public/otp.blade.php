@extends('home')
@section('insert')
<div class="container col-md-6">
	<strong>

	<div class="form-box">
		<?php print_r(Session::get('success'));
          ?>
		<h2 class="text-center hide-on-mobile wow fadeInUp">Enter your otp</h2>
		    <div class="contact-form wow fadeInUp">
				<form action="<?php echo url('forgotpass/verifyotp'); ?>" method="post">
                @csrf
					<div class="form-group">
                        <input type="hidden" name="email" value="<?php print_r(Session::get('email')); ?>" />
						<input type="number" class="form-control " id="otp" name="otp"/>
						@if($errors->has('email'))
							<span class="text-danger">{{$errors->first('otp')}}</span>
						@endif
					</div>
					
						<button type="submit" class="btn">Submit</button>
				</form>
			</div>
	</div>
</div>


@endsection
