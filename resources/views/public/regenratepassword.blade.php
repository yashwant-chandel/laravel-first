@extends('home')
@section('insert')
<div class="container col-md-6">
	<strong>

	<div class="form-box">
		<?php print_r(Session::get('success')); ?>
		<h2 class="text-center hide-on-mobile wow fadeInUp">Regenrate password</h2>
		    <div class="contact-form wow fadeInUp">
				<form action="<?php echo url('forgotpass/verifyotp'); ?>" method="post">
                @csrf
					<div class="form-group">
                        
                        <input type="hidden" name="email" value = "<?php print_r(Session::get('email')); ?>">
						<input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="********"/>
						@if($errors->has('password'))
							<span class="text-danger">{{$errors->first('newpassword')}}</span>
						@endif
					</div> 
                    <div class="form-group">
						<input type="password" class="form-control @errors->has('password_confirmation')" id="cpassword" name="password_confirmation" placeholder="********"/>
						@if($errors->has('password'))
							<span class="text-danger">{{$errors->first('password_confirmation')}}</span>
						@endif
					</div> 
						<button type="submit" class="btn">Change</button>
				</form>
			</div>
	</div>
</div>


@endsection
