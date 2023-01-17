@extends('home')
@section('insert')
	


	<section class="banner2-wrapper shop-wreap page-banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="banner2-content wow fadeInUp">
						<h1>Shop</h1>
						<div class="bredcumb-wrapper wow fadeInUp">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Shop</a></li>
									<li class="breadcrumb-item active" aria-current="page">{{$product['productname']}}</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="product-gallery-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 gallery-part">
					<div class="product-gallery wow fadeInUp">
						<img class="card-img-top" src="{{$product['image_path'].'/'.$product['img']}}" alt="Card image cap">
					</div>
					
				</div>

				<div class="col-md-7 content-part">
					<div class="product-content wow fadeInUp">
						<h2>{{$product['productname']}}:{{$product['Short_description']}}</h2>
						
						<div class="review-wrapper">
							<span class="reviews">
								<img src="{{url('img/star.png')}}" alt="Card image cap">
							</span>
							<span class="reviews-number">
								4.6 Review
							</span>
							<span class="stock">
								{{$product['stock']}} Stock
							</span>
						</div>
						<div class="price-wrapper">
						<h2 class=""><del>${{$product['price']}}</del></h2>
							<h2>(Sale Price: ${{$product['sale_price']}})</h2>
						</div>
						<div class="product-form wow fadeInUp">
							<form>
								<div class="form-group">
									<label>Language:</label>
									<select class="form-select" id ="language" aria-label="Default select example">
										<option selected>English</option>
										<option value="1">English</option>
										<option value="2">Spanish</option>
									</select>
								</div>
								<div class="form-group">
									<label>Quantity:</label>
									<div class="number">
										<span class="minus">-</span>
										<input type="text" id = "Qtyinput" value="1"/>
										<span class="plus">+</span>
									</div>
								</div>
								<div class="button-wrapper">
								<?php $session = Session::get('user');
									// print_r($session[0]->id);
									?>
									<a href="" class=" btn dark" data-id="{{$product['id']}}" id="Addtocart"  style="pointer-events: <?php if(empty($session)){ echo 'none'; }?>;">
									 Add to Cart</a>
									<a href="#" class="btn light">Wishlist</a>
								</div>
							</form>
						</div>
						<div class="copy-quote wow fadeInUp text-center">
							<p class="text-center" ><i>“If you buy direct from me I will sign copy for you.”</i></p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Blogs section end here  -->
	<section class="product-tab-section">
		<div class="container">
			<div class="tabs-wrapper">
				<ul class="nav nav-tabs wow fadeInUp" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="Description" data-bs-toggle="tab" data-bs-target="#Description_tab" type="button" role="tab" aria-controls="Description_tab" aria-selected="true">Description</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="Additional_information" data-bs-toggle="tab" data-bs-target="#Additional_information_tab" type="button" role="tab" aria-controls="Additional_information_tab" aria-selected="false">Gallery</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews_tab" type="button" role="tab" aria-controls="Reviews_tab" aria-selected="false">Reviews(2)</button>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="Description_tab" role="tabpanel" aria-labelledby="Description">
						<?php echo $product['description']; ?>

					</div>
		<div class="tab-pane fade" id="Additional_information_tab" role="tabpanel" aria-labelledby="Additional_information">
						<!-- gallery section -->
			<div class="container">
				<div class="row text-center text-lg-start">
				<?php 
				$gallery = explode(",",$product['Gallery']);
				// print_r($gallery);
				?>
				@foreach($gallery as $g)
					<div class="col-lg-3 col-md-4 col-6">
						<a href="#" class="d-block mb-4 h-100">
							<img class="img-fluid img-thumbnail" src="{{url('/products_images')}}/{{$g}}" alt="">
						</a>
					</div>
				@endforeach
				</div>
			</div>
					<!-- galler section end-->
		</div>
					<div class="tab-pane fade" id="Reviews_tab" role="tabpanel" aria-labelledby="Reviews-tab">
						<p><b>Jack Rosenthal writes "The Ultimate Guide to Teenage Investing"</b><br>
						Jack Rosenthal is a 19 year-old entrepreneur and investor. He is the founder of the Young Investors Club, LLC, one of the largest teen investment organizations in the world with close to 100 members and over $115,000+ under management. In addition, he also manages his own private investment fund for himself and select outside investors. He has personally mentored 100+ students on investing and is considered an authority on teenage investing.</p>
						<div class="info-list">
							<h6>In this book you will learn:</h6>
							<ul>
								<li>How, why and where to invest?</li>
								<li>How to earn money to invest?</li>
								<li>Key terms every investor should know</li>
								<li>How to analyze a stock through the Yahoo Finance portal</li>
								<li>How Jack founded one of the largest teen investment clubs</li>
								<li>What metrics and techniques Jack uses to look for investments for his own investment portfolio</li>
							</ul>
						</div>
						<p><b>Note from the author:</b> I've spent the last few months writing this book and detailing the EXACT investment techniques that I personally use. I highly recommend this guide to anyone from the ages of 13-21 who is looking to start or grow their own investment portfolio.</p>
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