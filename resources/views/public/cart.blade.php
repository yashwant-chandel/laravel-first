@extends('home')
@section('insert')
	


	<div class="cart-page" id ="cart-page">
	
		<div class="cart-section">
			<div class="container">
				<div class="cart-table-wrapper">
					<table class="table crat-table responsive">
						<thead class="">
							<tr>
								<th scope="col">Product Image</th>
								<th scope="col">Product Name</th>
								<th scope="col">Quantity</th>
								<th scope="col">Price</th>
								<th scope="col">Delete</th>
								<th scope="col">Update</th>
							</tr>
						</thead>
						<tbody class="">
							<?php
							$session = Session::get('user');
							// print_r($session);
							
							
							 $data = array();
							 $total_original_price = array();
							 ?>
							@foreach($cartdata as $d)
							<tr>
								<td data-th="Product">
									<div class="cart-product-wrapper">
										<div class="image-box">
											<img class="card-img-top" src="{{$d->image_path}}/{{$d->img}}" alt="Card image cap">
										</div>
										
									</div>
								</td>
								<td data-th="Product">
									<div class="cart-product-wrapper">
										<div class="product-text">
												<h2>{{$d->name}}</h2>
												<span class="sku"><b>SKU:</b>{{$d->Sku}}</span>
										</div>
									</div>
								</td>
								
								<td data-th="Quantity">
									<div class="number">
										<span class="minus">-</span>
										<input type="text" id="qty{{$d->id}}" value="{{$d->quantity}}"/>
										<span class="plus">+</span>
										
									</div>
								</td>
								
								<td data-th="Price">
									<span class="price"><del>${{$d->total_original_price}}</del></span><br>
									<?php array_push($total_original_price,$d->total_original_price); ?>
									<span class="price">${{$d->total_price}}</span>
								</td>
								<td data-th="Delete">
									<a href="" class="deletecart"  data-id = "{{$d->id}}" ><i class="fa-solid fa-trash"></i></a>
								</td>
								<td data-th="Update">
									
								<a href="" data-id = "{{$d->id}}" id="updatecart" class ="updatecart btn btn-md btn-dark">update</a>
								</td>
									
								<?php array_push($data,$d->total_price); ?>
							</tr>
							<?php 
							// $id = $d->id; 
							?>
							@endforeach
							
						</tbody>
						<?php  
						$without_discount = array_sum($total_original_price);
						$total_price = array_sum($data);
						?>

					</table>
				</div>

				<div class="cart-sub-total">
					<div class="subtotal">
						<table>
							<tbody>
								<tr><th>Subtotal</th><td><del>$<?php echo $without_discount; ?></del></td></tr>
								<tr><th>Discount</th><td>$<?php echo $without_discount-$total_price; ?></td></tr>
								
							</tr>
						</tbody>
						<tfoot>
							<tr><td>Total</td><td>$<?php echo $total_price; ?></td></tr>
						</tfoot>
					</table>
					<div class="button-wrapper">
						<a href="{{url('Cart/Checkout')}}" class="btn dark">Checkout</a>
						<a href="{{url('shop')}}" class="btn light">Continue Shopping</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container " >
  <main>
   
      <div class="col-10 ">
        <h4 class="mb-3 text-center">Billing address</h4>
        <form class="needs-validation" action ="{{ url('Cart/Checkout/orders') }}" method="post">
			@csrf
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="first_name" value="" >
              <div class="invalid-feedback">
                Valid first name is              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name="last_name" value="" >
              <div class="invalid-feedback">
                Valid last name is              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" name="Username" >
              <div class="invalid-feedback">
                  Your username is  </div>
              </div>
            </div>

          
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" >
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Country</label>
              <select class="form-select" id="country" name="country" >
                <option value="">Choose...</option>
                <option>india</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State</label>
              <select class="form-select" id="state" name="state" >
                <option value="">Choose...</option>
                <option>punjab</option>
                <option>hp</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="zip" name="zip_code" >
              <div class="invalid-feedback">
                Zip code   </div>
            </div>
</div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" id="che" type="submit">Continue to checkout</button>
        </form>
      
    </div>
  </main>

  
</div>



@endsection