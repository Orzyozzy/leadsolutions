@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Add New Product</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add New Product</li>
  </ol>
</section>

<section class="content">
	<div class="row">
		@if(Session::has('message'))
		<div class="col-sm-12">
			<div class="alert alert-success alert-dismissable">
				{{ session::get('message') }}
				<a class="close" data-dismiss="alert">&times;</a>
			</div>
		</div>
		@endif

	
		<div class="col-sm-6">
		  <form method="post" action="{{url('addProd')}}" enctype="multipart/form-data">
		  	{{ csrf_field() }}
		  	<input type="hidden" name="tbl" value="{{encrypt('products')}}">
		  
		  	<div class="form-group">
		  		<label>Title</label>
		  		<input type="text" name="title" class="form-control">
		  	</div>
              <div class="form-group">
                <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
              <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
              <p><img id="output" width="200" /></p>
            </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
                    @foreach($cats as $cat)
                <option>{{$cat->title}}</option>
                @endforeach
               
          </select>
              </div>
              
              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                <option>on</option>
                <option>off</option>

          </select>

              </div>

			<div class="form-group">
				<button class="btn btn-success">Add Product</button>
			</div>
		  </form>
		</div>
	
	</div>
</section>
<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

@stop
