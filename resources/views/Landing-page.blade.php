@extends('home')
@section('insert')
	<!-- Nav bar section start here -->
	<header class="navbar-wrapper wow fadeInUp landing-page-header">
		<nav class="navbar logo navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.html"><img src="img/logo.png"/></a>
				
			</div>
		</nav>
	</header>

	<section class="lp-section">
		<div class="container">
			<div class="inner-section">
				<div class="row">
					<div class="col-md-6 book-col wow fadeInUp">
						<img src="img/lp-image.jpg"/>
					</div>
					<div class="col-md-6 book-detail-col wow fadeInUp">
						<h2>The Book That's Changing Teen Investing Around the Globe</h2>
						<div class="sign-up-form wow fadeInUp">
							<h3>Sign Up for FREE Monthly Investment Tips</h3>
							<ul class="square-list">
								<li>Get Emails direct from Jack Rosenthal</li>
								<li>Get Jack's latest Stock / Investment recommendations</li>
								<li>Get Updated when Jack comes out with his next BOOK!</li>
							</ul>
							<form>
								<h4>Enter your email + number below to get signed up!</h4>
								<div class="form-group">
								  <input type="email" class="form-control" id="email" placeholder="Email Address">
								</div>
								<div class="form-group phone-group">
									<select class="form-select form-control" aria-label="Default select example">
									  <option selected>+1 United States</option>
									  <option value="1">+1 United States</option>
									  <option value="2">India</option>
									</select>
									<input type="number" class="form-control" id="number" placeholder="Phone Number">
								</div>
								<button class="btn dark">Sign Up</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

		<section class="testimonial-wrapper bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 wow fadeInUp">
					<div class="testimonial-content text-center">
						<h2>TESTIMONIALS</h2>
						<div class="testimonial-slider-wrapper">
							<div class="testimonial-slider">
								<div class="testimonial-slide">
									<div class="slide-content">
										<p>
										"My nephew is all about saving his money and how he can make more. I downloaded this for him as part of an early Christmas gift and he is loving it. Told me he can completely relate to the writer and is learning so much! Would 10 out of 10 recommend this to any young readers who want to learn more about investing!"
									</p>
									<ul class="list-unstyled d-flex justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
									</div>
								</div>
								<div class="testimonial-slide">
									<div class="slide-content">
										<p>
										"is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.!"
									</p>
									<ul class="list-unstyled d-flex justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
									</div>
								</div>
								<div class="testimonial-slide">
									<div class="slide-content">
										<p>
										"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English!"
									</p>
									<ul class="list-unstyled d-flex justify-content-center">
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
										<li><i class="fa-solid fa-star"></i></li>
									</ul>
									</div>
								</div>
							</div>
							<div class="testimonial-nav-slider">
								<div class="testimonial-nav-slide">
									<div class="testimonial-card">
										<div class="review-img">
											<img src="img/testimonial.jpg" class="img-fluid rounded-start" alt="...">
										</div>
										<div class="card-body">
											<h6>Morgan P</h6>
											<p>Amazon reviewer</p>
										</div>
									</div>
								</div>
								<div class="testimonial-nav-slide">
									<div class="testimonial-card">
										<div class="review-img">
											<img src="img/testimonial2.jpg" class="img-fluid rounded-start" alt="...">
										</div>
										<div class="card-body">
											<h6>Linia Marie Hardy</h6>
											<p>Life Coach and Mentor</p>
										</div>
									</div>
								</div>
								
								<div class="testimonial-nav-slide">
									<div class="testimonial-card">
										<div class="review-img">
											<img src="img/testimonial3.png" class="img-fluid rounded-start" alt="...">
										</div>
										<div class="card-body">
											<h6>Robert L Albert</h6>
											<p>Chiropractor</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<div class="lp-footer">
	<div class="container">
		<div class="inner-section text-center">
			<p>Jack Rosenthal - © 2022 All Rights Reserved</p>
		</div>
	</div>
</div>

	
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
