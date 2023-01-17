@extends('home')
@section('insert')
	<!-- Nav bar section start here -->
	<header class="navbar-wrapper wow fadeInUp">
		<nav class="navbar logo navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="img/logo.png" class="img-fluid" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-auto mb-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about-page.html">About Author</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="blogs-page.html">Blogs</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact-us.html">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Sign Up</a>
						</li>
						<div class="nav-icon">
							<ul class="list-unstyled d-flex mb-0">
								<li>
									<a href="#"><i class="bi bi-heart"></i>
										<span>0</span>
									</a>
								</li>
								<li>
									<a href="#"><i class="bi bi-cart"></i>
										<span>0</span>
									</a>
								</li>
							</ul>
						</div>
					</ul>
					<form class="d-flex">
						<a href="shop-page.html" type="button" class="btn btn-dark button--wapasha button--round-s" type="submit">Shop</a>
					</form>
				</div>
			</div>
		</nav>
	</header>
	<!-- Nav bar section end here -->

	<!-- banner section start here  -->
	<section class="banner2-wrapper blogs-wreap" style="background-image: url(img/banner-10.png);">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="banner2-content">
						<h1>Privacy Policy</h1>
						<div class="bredcumb-wrapper wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item"><a href="#">Privacy Policy</a></li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- banner section end here  -->

	<!-- Privacy Policy section start here  -->
	<section class="privacy-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-12">
					<div class="leftside-wrapper">
						<h5>Navigate this page</h5>
						<ul class="list-unstyled">
							<li>
								<a href="#introduction">Introduction</a>
							</li>
							<li>
								<a href="#collect">When do we collect your personal data?</a>
							</li>
							<li>
								<a href="#personaldata">How and why we process your personal data?</a>
							</li>
							<li>
								<a href="#sharing">Sharing your data</a>
							</li>
							<li>
								<a href="#transferring">Transferring your personal data outside the JR</a>
							</li>
							<li>
								<a href="#datasecure">How do we keep your data secure?</a>
							</li>
							<li>
								<a href="#unsubscribing">Unsubscribing</a>
							</li>
							<li>
								<a href="#yourrights">Your rights</a>
							</li>
							<li>
								<a href="#privacy">Changes to this Privacy Notice</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-12">
					<div class="rightside-wrapper">
						<div class="privacy-cont" id="introduction">
							<h3>Introduction</h3>
							<p>
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.
							</p>
							<p>
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
							</p>
							<p>
								Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
							</p>
							<h6>Third-party Links</h6>
							<p>
								The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence.
							</p>
						</div>
						<div class="privacy-cont" id="collect">
							<h3>When do we collect your personal data?</h3>
							<p>
								Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							</p>
							<ul>
								<li>
									Sed id urna at risus viverra tristique.	
								</li>
								<li>
									Duis eget nulla in ipsum ullamcorper volutpat.	
								</li>
								<li>
									Nulla varius quam vel eros euismod consequat.
								</li>
								<li>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.	
								</li>
							</ul>
							<p>
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum.
							</p>
						</div>
						<div class="privacy-cont" id="personaldata">
							<h3>How and why do we use your personal data?</h3>
							<p>
								It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
								Lorem Ipsum is simply dummy text of the printing and typesetting industry:
							</p>
							<h6>Website Analytics</h6>
							<p>
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
							</p>
							<h6>Blog Email Updates</h6>
							<p>	
								If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
							</p>
							<h6>Enquiries</h6>
							<p>
								There are many variations of passages of Lorem Ipsum available.
							</p>
						</div>
						<div class="privacy-cont" id="sharing">
							<h3>Sharing your data</h3>
							Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
							<ul class="list-unstyled">
								<li>
									Maecenas tempus ligula sit amet mauris tempor, id condimentum tortor varius.	
								</li>
								<li>
									Aenean non risus viverra, dignissim ipsum nec, tempor nibh.	
								</li>
							</ul>
						</div>
						<div class="privacy-cont" id="transferring">
							<h3>Transferring your personal data outside the jr </h3>
							<p>
								There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
							</p>
						</div>
						<div class="privacy-cont"id="datasecure">
							<h3>How do we keep your data secure?</h3>
							<p>
								The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.
							</p>
							<p>
								Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
							</p>
						</div>
						<div class="privacy-cont" id="unsubscribing">
							<h3>Unsubscribing</h3>
							<p>
								It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum.
							</p>
							<p>
								Various Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator.
							</p>
						</div>
						<div class="privacy-cont" id="yourrights">
							<h3>Your rights</h3>
							<p>
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
							</p>
							<p>
								<b>Request access</b> to your personal data (commonly known as a “data subject access request”).This enables you to receive a copy of the personal data we hold about you and to check that we are lawfully processing it.
							</p>
							<p>
								<b>Request correction</b> of the personal data that we hold about you. This enables you to have any incomplete or inaccurate information we hold about you corrected.
							</p>
							<p>
								<b>Request the transfer</b> of your personal data to another party.
							</p>
							<p>
								<b>Request erasure</b> of your personal data. This enables you to ask us to delete or remove personal data where there is no good reason for us continuing to process it.
							</p>
							<p>
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
							</p>
						</div>
						<div class="privacy-cont" id="privacy">
							<h3>Changes to this Privacy Notice</h3>
							<p>
								Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br>
								<b>It look like readable English. Many desktop publishing packages and web page editors.</b>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Privacy Policy section end here  -->

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
								<a href="about-page.html">About Author</a>
							</li>
							<li>
								<a href="shop-page.html">Shop</a>
							</li>
							<li>
								<a href="blogs-page.html">Blogs</a>
							</li>
							<li>
								<a href="contact-us.html">Contact Us</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6 col-12">
					<div class="footer-content wow fadeInUp">
						<h4>Legal</h4>
						<ul class="list-unstyled">
							<li>
								<a href="privacy-policy-page.html">Privacy Policy</a>
							</li>
							<li>
								<a href="#">Cookies Policy</a>
							</li>
							<li>
								<a href="#">Terms and Conditions</a>
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
@endsection