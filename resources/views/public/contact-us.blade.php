@extends('home')
@section('insert')


<section class="banner2-wrapper shop-wreap page-banner" style="background-image: url(img/contact-wrapper.png);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="banner2-content wow fadeInUp">
					<h1>Contact Us</h1>
					<div class="bredcumb-wrapper wow fadeInUp">
						<nav aria-label="breadcrumb">
						  <ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item"><a href="#">Contact Us</a></li>
						   
						  </ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="contact-section">
	<div class="container">
		<div class="inner-section">
			<div class="row">
				<div class="col-md-5 address-col">
					<h2 class="text-center hide-on-desktop wow fadeInUp">Get In Touch</h2>
					<img src="img/contact-image.jpg" class="image-fluid wow fadeInUp" alt="...">
					<div class="address-wrapper">
						
						<div class="address-box wow fadeInUp">
							<h3>EMAIL</h3>
							<ul>
								<li><a href="mailto:{{$admindata[0]->Username}}"> <?php echo $admindata[0]->Username; ?></a></li>
								
							</ul>
						</div>
					</div>
				</div>

   	<div class="col-md-7 form-col">
					<div class="form-box">
						<h2 class="text-center hide-on-mobile wow fadeInUp">Get In Touch</h2>
						<div class="contact-form wow fadeInUp">
						@foreach ($errors->all() as $error)
       					 <div>{{ $error }}</div>
   						 @endforeach
						 <?php
						 echo $response;
						 ?>
						<form method="post" action="<?php echo url('contactform');?>">
						@csrf
							<div class="form-group">
						    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name*">
						  </div>
						  <div class="form-group">
						    <input type="tel" class="form-control" name="phone" id="phone_number" placeholder="Phone Number*">
						  </div>
						  <div class="form-group">
						   <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address*">
						  </div>
						   <div class="form-group">
						    <input type="text" class="form-control" name="subject" id="subject" placeholder="subject*">
						  </div>
						  <div class="form-group">
							<textarea class="form-control" id="info" name="message" placeholder="Give us a little detail so we can best help you and your needs!*"></textarea>
						  </div>
						  
						  <button type="submit" class="btn">Submit</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<script>
		wow = new WOW(
		{
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                  }
                  )
		wow.init();
	</script>
@endsection
