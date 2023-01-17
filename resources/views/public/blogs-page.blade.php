@extends('home')
@section('insert')
	

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
						<h2>Latest posts</h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="blogcontent-wreap">
						 @foreach($results as $d)
						<div class="card">
							<div class="blog-img">
								<img src="{{url('products_images')}}/{{$d->img}}" class="card-img-top" alt="...">
							</div>
							<div class="card-body">
								<small>{{$d->posted_by}}|  {{$d->created_at}}</small>
								<h5><a href="#">{{$d->heading;}}</a></h5>
								<p>
															</p>
								<div class="feature-btn">
									<button type="button" class="btn btn-light text-dark"><a href="{{url('blogs-page')}}/{{$d->id}}">Read More</a></button>
								</div>
							</div>
						</div>
						@endforeach
						{!! $results->withQueryString()->links('pagination::bootstrap-5') !!}
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<div class="left-wrapper">
						<form class="search-box">
							<div class="input-group">
								<span class="input-group-text rounded-0 border-end-0" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
								<input type="text" class="form-control rounded-0 border-start-0" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
							</div>
						</form>
						
						<hr>
						<div class="list-wrapper">
							<h4>Recent Posts</h4>
							<ul class="list-group list-group-flush">
								
								@foreach($data as $d)
								<li class="list-group-item">
									<img src="{{$d->image_path}}/{{$d->img}}" class="" style=" max-width: 50%;
    height: auto;" alt="">
								<?php echo $d->heading; ?>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- blogs section end here  -->

	
	@endsection