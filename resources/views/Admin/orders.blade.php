@extends('Admin/admin')
@section('admin')
@if(Session::get('success'))
<?php 
print_r(Session::get('success'));
 ?>
@endif
@if(Session::get('error'))
<?php 
print_r(Session::get('error'));
 ?>
@endif
<table class="table crat-table responsive">
						<thead class="">
							<tr>
								<th scope="col">Sr.no.</th>
								<th scope="col">User Name</th>
								<th scope="col">User Email</th>
								<th scope="col">Price</th>
								<th scope="col">Refund</th>
								<th scope="col">status</th>
								<th scope="col">Products</th>
							</tr>
						</thead>
                        <tbody class="mt-0">
                            
                            <?php 
                            // dd($orders);
                            $count = 0; ?>
                            @foreach($orders as $order)
                            <?php $count = $count+1; ?>
                            <tr>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										{{ $count }}
									</div>
								</td>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										{{$order['users']['name']}}
									</div>
								</td>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										{{$order['users']['Username']}}
									</div>
								</td>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										${{$order['total_price']}}
									</div>
								</td>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										@if($order['refund_status']  == 1) <button class="btn btn-success">Refunded</button> @else <a href="{{ url('admin/refund') }}/{{ $order->id }}"><button class="btn btn-danger" >Refund</button></a> @endif
									</div>
								</td>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										ordered
									</div>
								</td>
                                <td data-th="Product" style="vertical-align: inherit;">
									<div class="cart-product-wrapper">
										<button  data-bs-toggle="modal" data-bs-target="#exampleModal{{ $order['id'] }}" class="btn btn-primary">Products</button>
									</div>
								</td>
                            </tr>
                            @endforeach
                        </tbody>

</table>
@foreach($orders as $order)
<!-- Modal -->
<div class="modal fade" id="exampleModal{{ $order['id'] }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order products</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th></th>
                          <th>S.No.</th>
                          <th>Product Name</th>
                          <th>Sku</th>
                          <th>price</th>
                        </tr>
                      </thead>
                          <tbody>
                            <?php $num = 0; ?>
                            @foreach($order['order_meta'] as $order_meta)
                            <?php $num = $num+1; ?>
                                <tr>
                                    <td><img style="width: 100%; height: 170px;" src="{{ $order_meta->image_path }}/{{ $order_meta->img }}" alt="image"></td>
                                    <td>{{$num}}</td>
                                    <td>{{ $order_meta['name'] }}</td>
                                    <td>{{ $order_meta['Sku'] }}</td>
                                    <td>{{ $order_meta['price'] }} </td>
                                </tr>
                            @endforeach
                            </tbody>
      </table>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection