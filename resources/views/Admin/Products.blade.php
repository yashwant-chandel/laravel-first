@extends('Admin/admin')
@section('admin')
<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Products</h4>
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead>
                        <tr class="text-center" >
                          <th>#</th>
                          <th>Product Image </th>
                          <th>Product Name</th>
                          <th>Price</th>
                          <th>Sale Price</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <?php $count = 0; ?>
                      @foreach($products as $p)
                      <tbody>
                        <tr>
                          <td>
                            <?php $count = $count+1;
                            echo $count; ?>
                          </td>
                          <td class="py-1">
                            <img style="width: 100%; height: 170px;" src="{{$p->image_path}}/{{$p->img}}" alt="image"/>
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

    
</div>

@endsection