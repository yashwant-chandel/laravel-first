
@extends('Admin/admin')
@section('admin')
<div class="container">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Blogs Table</h4>
                  <div class="table-responsive">
                    <table class="table table-striped text-center">
                      <thead ">
                        <tr>
                          <th>
                          Image
                          
                          </th>
                          <th>
                          Heading
                          
                          </th>
                          <th>
                          Created_at
                          </th>
                          <th>
                           
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($blogs as $b)
                        <tr>
                          <td class="py-1">
                            <img src="{{$b->image_path}}/{{$b->img}}" alt="image"/>
                          </td>
                          <td>
                          {{$b->heading}}
                          </td>
                          <td>
                          {{$b->created_at}}
                          </td>
                          <td>
                          <a href="<?php echo url('AddBlogs');?>/<?php echo $b->id; ?>" class="btn btn-sm btn-dark" >edit</a>
                            <a href="<?php echo url('delete') ?>/<?php echo $b->id; ?>" class= "btn btn-sm btn-dark">delete</a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

   
</div>
@endsection