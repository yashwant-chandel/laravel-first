<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Google font link here  -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<!-- Font awesome icon link start here  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/style.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo url('css/media.css');?>">
	<title>About Page</title>
</head>
<body>
<header class="navbar-wrapper wow fadeInUp">
		<nav class="navbar logo navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="<?php url('/');?>">
					<img src="/img/logo.png" class="img-fluid" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?php echo url('/'); ?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('about'); ?>">About Author</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('blogs-page'); ?>">Blogs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('contact-page'); ?>">Contact Us</a>
						</li>
						<?php 
						$session = Session::get('user'); 
					
						if(empty($session)){
						?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('register'); ?>">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('loginuser'); ?>">Sign In</a>
						</li>
						<?php } else{ ?>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo url('logout'); ?>">Logout</a>
						</li>
					<?php	} ?>
						
						<div class="nav-icon">
							<ul class="list-unstyled d-flex mb-0">
								<li>
									<a href="<?php echo url('Whislist'); ?>"><i class="bi bi-heart"></i>
										<span>0</span>
									</a>
								</li>
								<li>
									<a href="<?php echo url('cartview'); ?>"><i class="bi bi-cart"></i>
										<span>{{ $total ?? '0' }}</span>
									</a>
								</li>
							</ul>
						</div>
					</ul>
					<form class="d-flex">
						<a href="<?php echo url('shop'); ?>" type="button" class="btn btn-dark button--wapasha button--round-s" type="submit">Shop</a>
						
					</form>
				</div>
			</div>
		</nav>
	</header>
	<!-- Nav bar section end here -->
@yield('insert')
<?php ?>

<!-- Footer section start here  -->
<footer class="footer-wrapper">
		<div class="container">
			<div class="row footer-wreap">
				<div class="col-lg-3 col-md-3 col-sm-6 col-12">
					<div class="footer-content wow fadeInUp">
						<div class="logo">
							<a class="navbar-brand" href="index.html">Jack Rosenthal <p>Serial Entrepreneur, Investor &amp; Author</p></a>
						</div>
						<p>
							If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
						</p>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6 col-12">
					<div class="footer-content wow fadeInUp">
						<h4>Useful Links</h4>
						<ul class="list-unstyled">
							<li>
								<a href="<?php echo url('about'); ?>">About Author</a>
							</li>
							<li>
								<a href="<?php echo url('shop-page'); ?>">Shop</a>
							</li>
							<li>
								<a href="<?php echo url('blogs'); ?>">Blogs</a>
							</li>
							<li>
								<a href="<?php echo url('contact-page'); ?>">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6 col-12">
					<div class="footer-content wow fadeInUp">
						<h4>Legal</h4>
						<ul class="list-unstyled">
							<li>
								<a href="<?php echo url('privacypolicy'); ?>">Privacy Policy</a>
							</li>
							<li>
								<a href="privacypolicy">Cookies Policy</a>
							</li>
							<li>
								<a href="privacypolicy">Terms and Conditions</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6 col-12">
					<div class="footer-content wow fadeInUp">
						<div class="btn-wrapper">
							<button type="button" class="btn btn-light">#Follow us</button>
						</div>
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
			</div>
		</div>
		<div class="footer-buttom">
			<div class="text-center wow fadeInUp">
				<h6 style="color: #fff;" class="mb-0">Jack Rosenthal - © 2022 All Rights Reserved</h6>
			</div>
		</div>
	</footer>
	<!-- Footer section end here  -->

<script>
	// // view cart system
	// $(document).ready(function(){
		
	// 	$.ajax({
	// 	method:'get',
	// 	url:'{{url('cartdata')}}',
	// 	dataType: 'json',
	// 	success: function(response)
    //             {
	// 			// console.log(response);
	// 			const divdata = [];
	// 			$.each(response, function(key,value){
	// 					html =	'<tr><td data-th="Product"><div class="cart-product-wrapper"><div class="image-box"><img class="card-img-top" src="'+value.image_path+'/'+value.img+'" alt="Card image cap"></div></div></td><td data-th="Product"><div class="cart-product-wrapper"><div class="product-text"><h2>'+value.name+'</h2><span class="sku"><b>SKU:</b>'+value.Sku+'</span></div></div></td><td data-th="Quantity"><div class="number"><span class="minus">-</span><input type="text" id="qty'+value.id+'" value="'+value.quantity+'"/><span class="plus">+</span></div></td><td data-th="Price"><span class="price">$'+value.total_price+'</span></td><td data-th="Delete"><a href="" class="deletecart"  data-id = "'+value.id+'" ><i class="fa-solid fa-trash"></i></a></td><td data-th="Update"><a href="" data-id = "'+value.id+'" id="updatecart" class ="updatecart btn btn-md btn-dark">update</a></td></tr>';
	// 				//  console.log(html);
	// 				// console.log(value.name);
	// 				divdata.push(html);
	// 			 });
	// 			 $('.cartsection').html(divdata);
    //             }

	// });
	// });
$(document).ready(function(){
	$('.removeitem1').click(function(){
		// console.log('hlo');
		id = $(this).attr('data-id');
		// console.log(id);
		$.ajax({
			method:'post',
		url:'{{url('whislist/delete')}}',
		dataType: 'json',
		data: {_token: '{{csrf_token()}}', id:id},
		success: function(response)
                {
					location.reload();
                }

	});
		});

	});



  $('.updatecart').click(function(e){
	e.preventDefault();
	var ele = $(this).attr('data-id');
	// console.log(ele.attr('data-id'));
	qty = $('#qty'+ele).val();
	// alert(qty);
	// console.log(qty);
	$.ajax({
		method:'post',
		url:'{{url('updatecart')}}',
		dataType: 'json',
		data: {_token: '{{csrf_token()}}', id:ele, qty:qty},
		success: function(response)
                {
					// $('#cart-page').load();
					location.reload();
                }

	});
  });


$('#confirmpassword').change(function(){
	 password = $('#password').val();
	cpassword = $('#confirmpassword').val();
	
	if(password != cpassword){
		alert('password not matched');
		$('#confirmpassword').val('');
	}
});
$('#Addtocart').click(function(event){
	// alert('added to cart');
	event.preventDefault();
	sid = $('#Addtocart').attr('data-id');
	qty = $('#Qtyinput').val();
	// alert(sid);
	$.ajax({
		method: 'post',
		url: '{{url('cart')}}',
		dataType: 'json',
		data: {id:sid, qty:qty, _token: '{{csrf_token()}}'},
		success: function(response)
                {
                   console.log(response);
				// alert('successfully added to cart');
                }
	});
});
$('.Addtocarthome').click(function(event){
	// alert('added to cart');
	event.preventDefault();
	sid = $(this).attr('data-id');
	
	// alert(sid);
	$.ajax({
		method: 'post',
		url: '{{url('cart')}}',
		dataType: 'json',
		data: {id:sid, qty:1, _token: '{{csrf_token()}}'},
		success: function(response)
                {
					// $("<div>Test message</div>").dialog();
				alert('successfully added to cart');
                }
	});
});
$('.deletecart').click(function(event){
	event.preventDefault();
	id = $(this).attr('data-id');
	console.log(id);
	$.ajax({
		method: 'post',
		url: '{{url('deletecart')}}',
		dataType: 'json',
		data: {id:id, _token: '{{csrf_token()}}'},
		success: function(response)
                {
                    location.reload();
                }
	});
});
//tagfiltersystem
$(document).ready(function(){
	$('.tag').click(function(e){
		e.preventDefault();
	id = $(this).attr('data-id');
	$.ajax({
		method: 'post',
		url: '{{url('Tagsort')}}',
		dataType: 'json',
		data: {id:id, _token: '{{csrf_token()}}'},
		success: function(response)
                {
					const divdata = [];
				 $.each(response.data, function(key,value){
					
					html = '<div class="col-lg-3 col-md-6 col-12"><div class="card"><div class="shop-img"><a href="" class="product-thumb"><img class="card-img-top" src="'+value.image_path+'/'+value.img+'" alt="Card image cap"></a></div><div class="card-body text-center"><h4 id="pname">'+value.productname+'</h4><span><del>$'+value.price+'</del> <span class="text-dark">$'+value.sale_price+'</span></span><hr><div class="feature-btn text-center"><a href="{{url('/products/')}}/'+value.id+'"class="btn btn-light">View Product</a></div></div></div></div>';
					console.log(html);
					divdata.push(html);
				 });
				//  console.log(divdata);
				 $('.productssection').html(divdata);
                }
	});
});
});
//categories filter system
$(document).ready(function(){
	$('.categories').click(function(e){
		e.preventDefault();
		id = $(this).attr('data-id');
		// alert(id);
		$.ajax({
		method: 'post',
		url: '{{url('categorysort')}}',
		dataType: 'json',
		data: {id:id, _token: '{{csrf_token()}}'},
		success: function(response)
                {
                //  console.log(response.data);
				const divdata = [];
				 $.each(response.data, function(key,value){
					
					html = '<div class="col-lg-3 col-md-6 col-12"><div class="card"><div class="shop-img"><a href="" class="product-thumb"><img class="card-img-top" src="'+value.image_path+'/'+value.img+'" alt="Card image cap"></a></div><div class="card-body text-center"><h4 id="pname">'+value.productname+'</h4><span><del>$'+value.price+'</del> <span class="text-dark">$'+value.sale_price+'</span></span><hr><div class="feature-btn text-center"><a href="{{url('/products/')}}/'+value.id+'"class="btn btn-light">View Product</a></div></div></div></div>';
					console.log(html);
					divdata.push(html);
				 });
				//  console.log(divdata);
				 $('.productssection').html(divdata);
                }
		});
	});
});

$(document).ready(function(){
	$('.favourite').click(function(e){
		// alert('done');
		e.preventDefault();
		id = $(this).attr('data-id');
		$.ajax({
			method: 'post',
			url: '{{url('favourite')}}',
			dataType: 'json',
			data: {id:id, _token: '{{csrf_token()}}'},
			success: function(response)
			{
				console.log(response);
			}


		})
		// console.log(val);
	})


});
$(document).ready(function(){
	$('#searchblog').keyup(function(){
		// console.log($(this).val());
		val = $(this).val();
		// console.log(val);
		$.ajax({
			method: 'post',
			url: '{{url('blog/search')}}',
			dataType: 'json',
			data: {val:val, _token: '{{csrf_token()}}'},
			success: function(response)
			{
				const uldata = [];
				$.each(response, function(key,value){
				html = '<li class="list-group-item"><img src="'+value.image_path+'/'+value.img+'" class="" style="width:50%;" alt="">'+value.heading+'</li><a href="{{url('/blogs-page/')}}/'+value.id+'" class="btn btn-light text-dark">Read More</a>';
					uldata.push(html);
				
				});
				console.log(uldata);
				$('.Search_panel').html(uldata);
			}


		});
	});
});

</script>
<script>
	
	jQuery(document).ready(function() {
		jQuery('.minus').click(function () {
			var $input = jQuery(this).parent().find('input');
			var count = parseInt($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});
		jQuery('.plus').click(function () {
			var $input = jQuery(this).parent().find('input');
			$input.val(parseInt($input.val()) + 1);
			$input.change();
			return false;
		});
	});
</script>
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


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Js files link start here  -->
<script type="text/javascript" src="<?php echo url('js/main-js.js');?>"></script>
<script type="text/javascript" src="<?php echo url('js/wow.js');?>"></script>

</body>
</html> 