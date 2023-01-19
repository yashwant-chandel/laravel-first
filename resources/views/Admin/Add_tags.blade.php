@extends('Admin/admin')
@section('admin')
<div class="container col-8">
<?php if($message){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
              @foreach ($errors->all() as $error)
       					 <div>{{ $error }}</div>
   						 @endforeach
 
  <h3 class="text-dark">Add Tags</h3>
  
</div>
    <div class="card-body">
                  <form class="forms-sample" action="<?php echo url('addtags'); ?>" method="post">
                  @csrf
                    <div class="form-group">
                      <input type="hidden" name ='id' value="{{$id}}">
                      <label for="exampleInputUsername1">Name</label>
                      <input type="text" class="form-control" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" id="exampleInputUsername1" name="Tags_name" >
                    </div>
                    <div class="form-group">
                      <label for="slug-text">Slug</label>
                      <input type="text" class="form-control" id="slug-text" name="slug">
                    </div>
                   
                  
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                   
                  </form>
     </div>

</div>
@endsection
