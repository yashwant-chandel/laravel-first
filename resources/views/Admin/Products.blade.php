@extends('Admin/admin')
@section('admin')
<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Products</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Product Image </th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Sale Price</th>
                          <th></th>
                        </tr>
                      </thead>
                      @foreach($products as $p)
                      <tbody>
                        <tr>
                          <td class="py-1">
                            <img src="{{$p->image_path}}/{{$p->img}}" alt="image"/>
                          </td>
                          <td>
                           {{$p->productname}}
                          </td>
                          <td>
                           
                            {{$p->price}}
                            
                          </td>
                          <td>
                          {{$p->sale_price}}
                          </td>
                          <td>
                          <a href="<?php echo url('AddProducts');?>/<?php echo $p->id; ?>" class="btn btn-sm btn-dark" >edit</a>
                            <a href="<?php echo url('deleteproduct') ?>/<?php echo $p->id; ?>" class= "btn btn-sm btn-dark">delete</a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>

    <!-- <div class="row">
        <div class="col-lg-10">
        <div class="list-wrapper" style= "height: 600px; overflow: scroll;">
							<h4>Products</h4>
							<ul class="list-group list-group-flush">
                                @foreach($products as $p)
								<li class="list-group-item">
									<img src="{{$p->image_path}}/{{$p->img}}" class="" style="max-width: 60%; height: 200px;" alt="">
									{{$p->productname}}
                                    <a href="<?php echo url('AddBlogs');?>/<?php echo $p->id; ?>" class="btn btn-sm btn-dark" >edit</a>
                                    <a href="<?php echo url('deleteproduct') ?>/<?php echo $p->id; ?>" class= "btn btn-sm btn-dark">delete</a>
                                </li>
                                @endforeach
							</ul>
						</div>
        
        
        </div>
    </div> -->
</div>

@endsection