@extends('Admin/admin')
@section('admin')

<?php if($message){ ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{$message}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>
      <div class="container col-8">
      <div class="alert alert-warning alert-dismissible fade show" role="alert">

        <h3 class="text-dark">Admin details</h3>
    </div>
        
        <form action ="<?php echo url('adminedit'); ?>" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" Required>
                              @if($errors->has('name'))
                              <span class="text-danger">{{$errors->first('name')}}</span>
                              @endif
                            </div>
                            <div class="form-group">
                                <label for="info">About</label>
                            <textarea  class="ckeditor form-control" id="info" name="about_life" Required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="info1">Description</label>
                            <textarea class="ckeditor form-control" id="info1" name="about_profession" Required ></textarea>
                            </div>
                            <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" class="form-control" name="heading" id="heading" placeholder="heading" Required>
                                @if($errors->has('name'))
                              <span class="text-danger">{{$errors->first('name')}}</span>
                              @endif
                              </div>
                            <input type="file" name ="testing" class="form-control" Required>
                            @if($errors->has('name'))
                              <span class="text-danger">{{$errors->first('name')}}</span>
                              @endif
                            <button type="submit" class="btn btn-success btn-sm mt-4">Submit</button>
            </form>
      </div>
     
    </div>
  </div>
</div>

@endsection