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
						<a href="#" class="btn dark">Checkout</a>
						<a href="#" class="btn light">Continue Shopping</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

</script>



@endsection