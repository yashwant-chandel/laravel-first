@extends('Admin/admin')
@section('admin')
<div class="container">
<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tags</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>S.No.</th>
                          <th>Tag Name</th>
                          <th>Slug</th>
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
                          <a href="<?php echo url('Addtags'); ?>/<?php echo $d->id; ?>" class="btn btn-sm btn-dark" >edit</a>
                            <a href="<?php echo url('deletetag'); ?>/<?php echo $d->id; ?>"" class= "btn btn-sm btn-dark">delete</a>
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