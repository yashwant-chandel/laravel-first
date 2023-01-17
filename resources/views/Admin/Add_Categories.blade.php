@extends('Admin/admin')
@section('admin')

<div class="container col-8">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong>
  <h3 class="text-dark">Add Category</h3>
</div>
<div class="container col-12">
<div class="card-body">
                  <form class="forms-sample" action="<?php echo url('addcategories'); ?>" method="post">
                  @csrf
                    <div class="form-group">
                      <input type="hidden" name="id" value="{{$id}}">
                      <label for="exampleInputUsername1">Catgory Name</label>
                      <input type="text"  onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" id="exampleInputUsername1" name="category_name" >
                    </div>
                    <div class="form-group">
                      <label for="slug-text">Slug</label>
                      <input type="text" class="form-control" id="slug-text" name="slug">
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Parent Categories</label>
                      <select name="parent_category" id="exampleInputPassword1" class="form-control">
                        @foreach($data as $d)
                      <option value="{{$d->id}}">{{$d->name}}</option>
                      @endforeach
                      </select>
                    </div>
                  
                    <button type="submit" id="btn" class="btn btn-success btn-sm">Submit</button>
                   
                  </form>
  </div>

</div>
</div>


@endsection
