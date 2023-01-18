@extends('home')
@section('insert')

<div class="container grid-container">
		
			<div class="productssection row" id="productssection">
			<?php if(isset($results)){
                foreach($results as $r){
                    ?>
         
				<div class="col-lg-3 col-md-6 col-12">
					<div class="card">
						<div class="shop-img">
							<a href="{{url('/products/'.$r['id'])}}" class="product-thumb">
								<img class="card-img-top" src="{{url('products_images')}}/{{$r['image']}}" alt="Card image cap">
							</a>
							<div class="shop-icon">
							<?php $session = Session::get('user');
									// print_r($session);
									?>
									<a href="#" class="Addtocarthome me-2" data-id="{{$r['id']}}" id="Addtocarthome"  style="pointer-events: <?php if(empty($session)){ echo 'none'; }?>;" >
									<i class="bi bi-cart"></i>
								</a>
								<a href="" class="favourite" data-id = "{{$r['id']}}">
									<i class="bi bi-heart "></i>
								</a>
							</div>
						</div>
						<div class="card-body text-center">
							<h4 id="pname">{{$r['productname']}}</h4>
							<span class="text-dark"><del>${{$r['price']}}</del> <span class="text-dark">${{$r['sale_price']}}</span></span>
                            <br><button class="removeitem1 btn btn-dark" data-id="{{$r['id']}}" >Remove</button>
                        </div>
					</div>
				</div>
                <?php       }
            } ?>
			</div>
			
		</div>

@endsection