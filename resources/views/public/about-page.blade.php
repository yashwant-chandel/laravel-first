@extends('home')
@section('insert')
	<!-- Nav bar section start here -->
	

	<!-- banner section start here  -->
	<section class="banner2-wrapper">
	
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="banner2-content">
						<h1>About Me</h1>
						<div class="bredcumb-wrapper wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">About Author</a></li>

								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner section end here  -->

	<!-- About section start here  -->
	<section class="rosenthal-wrapper about-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-sm-12 col-12">
					<div class="jack-rosenthal-img">
						<img src="{{$userdata->img_url}}/{{$userdata->img}}" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-6 col-sm-12 col-12">
					<div class="jack-wreap">
						<div class="rosenthal-content"> 
							<h1 style="text-align: start;">
							{{$userdata->name}}
								<div class="heding-wreap">
									<span>I’m</span>
									<h2>{{$userdata->name}}</h2>
								</div>
							</h1>
						</div>
						<div class="text-wreap">
							<div>
								<p style="text-align: justify;">
								{{$userdata->about_profession}}		
							</p>
						
							</div>
						</div>		
					</div>
				</div>
			</div>
			<div class="row about-bt">
				<div class="col-lg-5 col-md-6 col-sm-12 col-12">
					<div>
						<p style="text-align: justify;">
						{{$userdata->about_life}}	
					</p>
					
					</div>
				</div>
				<div class="col-lg-6 offset-lg-1 col-md-6 col-sm-12 col-12">
					<div>
					<p style="text-align: justify;">
						{{$userdata->extra_description}}	
					</p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About section end here  -->

	<!-- serial entrepreneur section start here  -->
	<section class="serial-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="serial-content text-center">
						<h2>“{{$userdata->heading}}”</h2>
					</div>		
				</div>
			</div>
		</div>
	</section>
	<!-- serial entrepreneur section end here  -->

	<!-- Teen entrepreneur section start here 	 -->
	<section class="teen-wrapper" style="background-image: url(products_images/{{$bannerdata->banner_img}})">

		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="teen-content text-strat">
						<p>{{$bannerdata->banner_description}}</p>
						<a href="{{$bannerdata->url}}"><button type="button" class="btn btn-light">Buy The Book</button></a>
					</div>		
				</div>
			</div>
		</div>
	</section>
	<!-- Teen entrepreneur section end here 	 -->

	<!-- Get Latest Newsletter section start here  -->
	<section class="newletter-wrapper newletter2-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="newletter-content text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
						<h2>Get Latest Newsletter</h2>
						<form>
							<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Email Address">
						</form>
						<div>
							<button type="button" class="btn btn-dark">View All</button>
						</div>
					</div>		
				</div>
			</div>
		</div>
	</section>
	<!-- Get Latest Newsletter section end here  -->

	
	<!-- Footer section end here  -->
@endsection