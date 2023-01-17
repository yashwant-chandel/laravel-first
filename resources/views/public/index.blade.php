@extends('home')
@section('insert')


	<!-- banner section start here  -->
	<section class="banner-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="banner-content  wow fadeInUp">
						<h1>Welcome To Jack Rosenthal!</h1>
						<p>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using making it look like readable English. 
						</p>
						<div class="btn-wrapper">
							<button type="button" class="btn btn-light">Join Our Newsletter</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner section end here  -->

	<!-- banner ads images section start here  -->
	<section class="banner-ads-wrapper">
		<div class="container">
			<div class="row">
				<div class="row row-cols-1 row-cols-lg-5 row-cols-md-5 row-cols-sm-2 col-12 mx-0">
					<div class="col banner-set wow fadeInUp">
						<div class="card h-100">
							<div class="ads-img">
								<img src="img/Success-bug.svg" class="card-img-top" alt="...">
							</div>
						</div>
					</div>
					<div class="col banner-set wow fadeInUp">
						<div class="card h-100">
							<div class="ads-img">
								<img src="img/marketwatch-logo.svg" class="card-img-top" alt="...">
							</div>
						</div>
					</div>
					<div class="col banner-set wow fadeInUp">
						<div class="card h-100">
							<div class="ads-img">
								<img src="img/WSJ_Logo.svg" class="card-img-top" alt="...">
							</div>
						</div>
					</div>
					<div class="col banner-set wow fadeInUp">
						<div class="card h-100">
							<div class="ads-img">
								<img src="img/Newsmax_TV.svg" class="card-img-top" alt="...">
							</div>
						</div>
					</div>
					<div class="col banner-set wow fadeInUp">
						<div class="card h-100">
							<div class="ads-img">
								<img src="img/Mediumcom.svg" class="card-img-top" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner add images section start here  -->

	
	<!-- Jack Rosenthal section start here  -->
	<section class="rosenthal-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-6 col-sm-12 col-12 wow fadeInUp">
					<div class="jack-wreap">
						<div class="rosenthal-content"> 
							<h1>
								{{$userdata->name}}
								<div class="heding-wreap">
									<span>I’m</span>
									<h2>{{$userdata->name}}</h2>
								</div>
							</h1>
						</div>
						<div class="row text-wreap">
							<div class="col-lg-5 col-md-12 col-sm-12 col-12 wow fadeInUp">
								<div>
									<p style="text-align: justify;">
								{{$userdata->about_life}}		
								</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-12 col-sm-12 col-12 wow fadeInUp">
								<div  class="text-end">
									<p style="text-align: justify;">
									{{$userdata->about_profession}}	
									</p>
								</div>
							</div>
						</div>		
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1 col-md-6 col-sm-12 col-12 wow fadeInUp">
					<div class="jack-rosenthal-img">
						<img src="{{$userdata->img_url}}/{{$userdata->img}}" class="img-fluid" alt="">
					</div>		
				</div>
			</div>
		</div>
		<hr>
	</section>
	<!-- Jack Rosenthal section start here  -->

	<!-- TESTIMONIALS section start here  -->
	<section class="testimonial-wrapper">
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
	<!-- TESTIMONIALS section end here  -->

	<!-- Sign Up for FREE Monthly Investment Tips section start here  -->
	<section class="investment-wrapper wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="investment-content wow fadeInUp">
						<h3>
							<a href="#" class="">Sign Up for FREE Monthly Investment Tips</a>
						</h3>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Sign Up for FREE Monthly Investment Tips section end here  -->
	
	<!-- Featured Books section start here  -->
	<section class="feature-wrapper wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="feature-content text-center">
						<h2>Featured Books</h2>
					</div>
					<div class="slider-nav">
						@foreach($result as $d)
						<div class="featured-img">
							<img src="{{$d->image_path}}/{{$d->img}}" class="card-img-top" alt="...">
						</div>
						@endforeach
					</div>
					<div class="slider-for">
						@foreach($result as $d)
						<div class="content-wreap">
							<a href="#">{{$d->productname}}:{{$d->Short_description}}</a>
							<p><i class="fa-solid fa-star"></i> 5.6</p>
							<div class="feature-btn text-center">
								<button type="button" class="btn btn-light"><a href="{{url('products')}}/{{$d->id}}">View Book</a></button>
							</div>
						</div>
						@endforeach
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Featured Books section end here  -->

	<!-- Blogs section start here  -->
	<section class="blog-wrapper wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="text-center"> 
						<h2>Blogs</h2>
					</div>
					<div class="blog-slider">
						@foreach($data as $d)
						<div class="card">
							<div class="blog-img">
								<img src="{{$d->image_path}}/{{$d->img}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<small>{{$d->created_at}}</small>
								<h5><a href="{{url('blogs-page');}}/{{$d->id}}">{{$d->heading}}</a></h5>
								
							</div>
						</div>
						@endforeach
					</div>
					<div class="text-center">
						<a href="{{url('blogs-page')}}" type="button" class="btn btn-dark">View All</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</section>
	<!-- Blogs section end here  -->

	<!-- Get Latest Newsletter section start here  -->
	<section class="newletter-wrapper wow fadeInUp">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="newletter-content text-center wow fadeInUp">
						<h2> SIGN UP FOR MY FREE NEWSLETTER</h2>
						<form>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email Address">
							<button type="button" class="btn btn-dark">Subscribe</button>
						</form>
					</div>		
				</div>
			</div>
		</div>
	</section>
	<!-- Get Latest Newsletter section end here  -->

	
	<!-- Nav bar section start here -->

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