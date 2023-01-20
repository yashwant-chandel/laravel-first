@extends('home')
@section('insert')
	<!-- Nav bar section start here -->
	

	<!-- banner section start here  -->
	<section class="banner2-wrapper blogs-wreap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="banner2-content">
						<h1>Blogs</h1>
						<div class="bredcumb-wrapper wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Blogs</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner section end here  -->

	<!-- blogs section start here  -->
	<section class="blog-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="blogcontent-wreap">
						<div class="card mb-0">
							<div class="blog-imgb">
								<img src="{{url($blog[0]->image_path)}}/{{$blog[0]->img}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<small>{{$blog[0]->posted_by}}  |  {{$blog[0]->created_at}}</small>
								<h5>{{$blog[0]->heading}}</h5>
								<p>
								<?php echo $blog[0]->description; ?>	
								</p>
								<div class="cort-wreap">
									<h3>
									<?php echo $blog[0]->short_notice; ?>
									</h3>
								</div>
								<p>
									
								</p>
								<div class="social-wreap">
									<div class="footer-content wow fadeInUp">
										<button type="button" class="btn btn-dark">Share On</button>
										<ul class="social-icon d-flex list-unstyled">
											<li>
												<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-instagram"></i></a>
											</li>
											<li>
												<a href="#"><i class="fa-brands fa-twitter"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="blogbt-btn">
									<a class="btn btn-primary" href="#" role="button">
										<i class="fa-solid fa-arrow-left me-2"></i> Prev Post
									</a>
									<a class="btn btn-primary" href="#" role="button">
										Next Post
										<i class="fa-solid fa-arrow-right ms-2"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blogs section end here  -->

	
	<!-- Footer section end here  -->
@endsection