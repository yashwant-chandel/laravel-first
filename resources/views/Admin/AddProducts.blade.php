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

  <h3 class="text-dark">Add Products</h3>
</div>
<form class="forms-sample" action ="<?php echo url('products');?>" method="post" enctype="multipart/form-data">
@csrf
                    <div class="form-group">
					<input type="hidden" name="id" value="<?php echo $id; ?>" >
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" name="name" id="exampleInputName1" Required>
                      @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                    @endif 
                    </div>
					<div  class="form-group">
                      <label for="slug-text">Slug</label>
                      <input type="text" class="form-control" name="Slug" id="slug-text" Required>
                      @if($errors->has('Slug'))
                    <span class="text-danger">{{$errors->first('Slug')}}</span>
                    @endif 
                    </div>
					<div class="form-group">
                      <label for="sku">Sku</label>
                      <input type="text" class="form-control" id="sku" name="sku">
                      @if($errors->has('sku'))
                    <span class="text-danger">{{$errors->first('sku')}}</span>
                    @endif 
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcat">Category</label>
					  
						<select name="category[]" class="form-control " id="exampleInputcat" style = "height:80px;" multiple Required>
							@foreach($data as $d)
							<option value="{{$d->id}}" class="text-dark">{{$d->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
                      <label for="exampleInputtag">Tags</label>
						<select name="Tags[]" class="form-control" id="exampleInputtag" style = "height:80px;" multiple Required>
							@foreach($tags as $t)
							<option class="text-dark" value="{{$t->id}}">{{$t->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
                      <label for="price">Price</label>
					        <input type="number" class="form-control" name="price" id="price" Required>
                    </div>
					
                    <div class="form-group">
                      <label for="sale_price">Sale Price</label>
					             <input type="number" class="form-control" name="sale_price" id="sale_price" Required>
                    </div>
					          <div class="form-group">
                      <label>Product_image</label>
                      <div class="input-group col-xs-12">
					             <input type="file" class="form-control" name="img" id="File_upload" Required >
                       <span class="text-danger" style="font-size:10px;">*Required 543 X 803 px</span>
                       @if($errors->has('img'))
                    <span class="text-danger">{{$errors->first('img')}}</span>
                    @endif 
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Product Gallery</label>
                      <div class="input-group col-xs-12">
                      <input type="file" class="form-control" name="documents[]" multiple>
                      </div>
                    </div>
					          <div class="form-group">
                      <label for="manage_stock">Manage Stock</label>
					                     <input type="checkbox" id="mstocks">
                    </div>
					          <div class="form-group" id="stockdiv" style="display:none;">
                      <label for="price">No. of stocks</label>
					                <input type="number" class="form-control" name="Stocks" id="stocks">
                    </div>
					        <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="ckeditor form-control" name="description"></textarea>
                    </div>

					
					<div class="form-group">
                      <label for="description">Short Description</label>
					  <textarea name="short_description" id="placeHolder" class="form-control" Required ></textarea>
                    </div>
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                  </form>

				  </div>
@endsection

