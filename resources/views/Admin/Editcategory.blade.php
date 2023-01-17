@extends('Admin/admin')
@section('admin')
<div class="container">
<div class="col-lg-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Categories</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>S.No.</th>
                          <th>Category Name</th>
                          <th>Slug</th>
                          <th>Parent Category</th>
                          <th></th>
                        </tr>
                      </thead>
                      <?php $num = 0; ?>
                      @foreach($data as $d)
                      <?php $num = $num+1; ?>
                      <tbody>
                        <tr>
                        <td>
                        {{$num}}
                        </td>
                          <td>
                           {{$d->name}}
                          </td>
                          <td>
                            {{$d->slug}}  
                        </td>
                        <td>
                            {{$d->parent_category}}  
                        </td>
                          <td>
                          <a href="<?php echo url('Addcategories'); ?>/<?php echo $d->id; ?>" class="btn btn-sm btn-dark" >edit</a>
                            <a href="<?php echo url('deletecat'); ?>/{{$d->id}}" class= "btn btn-sm btn-dark">delete</a>
                          </td>
                        </tr>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection