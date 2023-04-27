@extends('home')
@section('insert')
<?php
//  print_r($orders);
 ?>
<div class="container">
<div class="cart-table-wrapper">
					<table class="table crat-table responsive">
						<thead class="">
							<tr class="text-center">
								<th scope="col">Order No.</th>
								<th scope="col">Address</th>
								<th scope="col">Payment Status</th>
								<th scope="col">Status</th>
								<th scope="col">Price</th>
                                <th scope="col">Products</th>
							</tr>
						</thead>
						<tbody class="">
							<?php $count = 0; ?>
							@foreach($orders as $order)
                            <?php $count = $count+1; ?>
							<tr class="text-center">
								<td data-th="Product">
									<div class="cart-product-wrapper">
										{{ $count }}
									</div>
								</td>
								<td data-th="Product">
									<div class="cart-product-wrapper">
										<div class="product-text">
											{{ $order->address }}
										</div>
									</div>
								</td>
								
								<td data-th="Quantity">
									<div class="cart-product-wrapper">
                                        @if($order->payment_status == 1) done @else not done @endif
									</div>
								</td>
								<td data-th="Price">
									<span class="price">ordered</span>
								</td>
								<td data-th="Price">
								
									<span class="price">${{ $order->total_price }}</span>
								</td>
                                <td data-th="Price">
								
									<button class="btn text-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $order->id }}" >Products</button>
								</td>	
							</tr>
                            
							@endforeach
						</tbody>
						
					</table>
                    
				</div>           
 </div>
 
 @foreach($orders as $order)
 <div class="modal fade" id="staticBackdrop{{ $order->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content ">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <table class="table crat-table responsive">
                                        <thead class="">
                                            <tr class="text-center">
                                                <th scope="col"></th>
                                                <th scope="col">Product No.</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Sku </th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $num = 0; ?>
                                            @foreach($order['order_meta'] as $order_meta)
                                            <?php $num = $num +1; ?>
                                            <tr>
                                            <td data-th="Product">
                                                <div class="cart-product-wrapper">
                                                    <div class="image-box">
                                                        <img class="card-img-top" src="{{$order_meta->image_path}}/{{$order_meta->img}}" alt="Card image cap">
                                                    </div>
                                                </div>
                                            </td> 
                                            <td data-th="Product">
                                                <div class="cart-product-wrapper">
                                                    {{ $num }}
                                                </div>
                                            </td> 
                                            <td data-th="Product">
                                                <div class="cart-product-wrapper">
                                                    {{ $order_meta->name }}
                                                </div>
                                            </td> 
                                            <td data-th="Product">
                                                <div class="cart-product-wrapper">
                                                    {{ $order_meta->Sku }}
                                                </div>
                                            </td> 
                                            <td data-th="Product">
                                                <div class="cart-product-wrapper">
                                                    {{ $order_meta->quantity }}
                                                </div>
                                            </td> 
                                            <td data-th="Product">
                                                <div class="cart-product-wrapper">
                                                    {{ $order_meta->price }}
                                                </div>
                                            </td> 
                                            
                                            </tr>
                                            @endforeach
                                        </tbody>
                                   </table>
                                    </div>
                                    <div class="modal-footer">
                              
                                    </div>
                                    </div>
                                </div>
                                </div>
@endforeach
@endsection