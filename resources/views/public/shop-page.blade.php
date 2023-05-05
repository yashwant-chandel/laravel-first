@extends('home')
@section('insert')
	
	<!-- Nav bar section end here -->


	<!-- banner section start here  -->
	<section class="banner2-wrapper shop-wreap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="banner2-content">
						<h1>Shop</h1>
						<div class="bredcumb-wrapper wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item"><a href="#">Teen Investing</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner section end here  -->

	<!-- shop list and grid view section start here  -->
	<section class="shopview-wrapper">
		<div class="container mb-3 mt-3">
			<div class="topiview-wreap">
				<div class="shopttop-btn">
					<button class="btn btn-dark btn-grid"><i class="fa-solid fa-grip"></i></button>
					<button class="btn btn-dark btn-list"><i class="fa-solid fa-list"></i></button>
					<span id="totalproducts">Showing All {{count($results)}} results</span>
				</div>
				<div class="shopview-select">
			<h5 class="text-center">Categories</h5>
			<ul class="list-group" style="max-height: 120px; overflow: scroll;">
			<li class="list-group-item "><a style="text-decoration: none;" class=" text-dark"   href="{{url('shop')}}">Default</a></li>
			@foreach($cat as $c)
				<li class="list-group-item "><a style="text-decoration: none;" class="categories text-dark" data-id = "{{$c['id']}}" href="">{{$c['name']}}</a></li>
			@endforeach
			</ul>
				</div>
				<form class="search-box">
							<div class="input-group">
								<span class="input-group-text rounded-0 border-end-0" id="basic-addon1"><i class="fa-solid fa-magnifying-glass"></i></span>
								<input type="text" id="productsearch" class="productsearch form-control rounded-0 border-start-0" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
							</div>
						</form>
				
				<div class="shopview-select">
			<h5 class="text-center">Tags</h5>
			<ul class="list-group" style=" width:150px; height: 120px; overflow: scroll;">
			<li class="list-group-item "><a style="text-decoration: none;" class="tag text-dark" data-id = "0" href="{{url('shop')}}">Default</a></li>
			@foreach($tags as $t)
				<li class="list-group-item " id><a style="text-decoration: none;" id="tag" data-id = "{{$t->id}}" class="tag text-dark" href="">{{$t['name']}}</a></li>
			@endforeach
			</ul>
				</div>
				
			</div>
			<hr>
			
		</div>
		
		<div class="container grid-container">
		<div class="results">
		
			</div>
			
		
			<div class="productssection row" id="productssection">
			@foreach($results as $d)
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card">
						<div class="shop-img">
							<a href="{{url('/products/'.$d->Slug)}}" class="product-thumb">
								<img class="card-img-top" src="{{$d->image_path}}/{{$d->img}}" alt="Card image cap">
							</a>
							<div class="shop-icon">
							<?php $session = Session::get('user');
									// print_r($session);
									?>
									<a href="#" class="Addtocarthome me-2" data-id="{{$d->id}}" id="Addtocarthome"  style="pointer-events: <?php if(empty($session)){ echo 'none'; }?>;" >
									<i class="bi bi-cart"></i>
								</a>
								<a href="" class="favourite" data-id = "{{$d->id}}">
									<i class="bi bi-heart "></i>
								</a>
							</div>
						</div>
						<div class="card-body text-center">
							<h4 id="pname">{{$d->productname}}</h4>
							<span  ><del>${{$d->price}}</del> <span class="text-dark">${{$d->sale_price}}</span></span>
							<hr>
							<div class="feature-btn text-center">
								<a href="{{url('/products/'.$d->Slug)}}"class="btn btn-light">View Product</a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			{!! $results->withQueryString()->links('pagination::bootstrap-5') !!}
		</div>
	</section>
	<!-- shop list and grid view section end here  -->

	<!-- shop now section start here  -->
	<section class="shopnow-wrapper">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="shopnow-img">
						<img src="products_images/{{$banner->banner_img}}" class="img-fluid" alt="">
						<div class="feature-btn">
							<a href="{{$banner->url}}" type="button" class="btn btn-light">Shop Now!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- shop now section end here  -->

	<!-- Best courses section start here  -->
<section class="courses-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="courses-content">
						<h2>Best courses For your Teen InVesting</h2>
						<p>
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
						</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<div class="courses-btn text-end">
						<button type="button" class="btn btn-dark">View All</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Best courses section end here  -->

	
@endsection