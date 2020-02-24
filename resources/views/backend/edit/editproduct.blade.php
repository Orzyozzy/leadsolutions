@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Edit Products</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Products</li>
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

	
		<div class="col-sm-12">
        <form method="post" action="{{url('updateProduct')}}/{{$data->pcid}}" enctype="multipart/form-data">
		  	{{ csrf_field() }}
		  	<input type="hidden" name="tbl" value="{{encrypt('contents')}}">
        <input type="hidden" name="pcid" value="{{$data->pcid}}">
		  	<div class="form-group">
		  		<label>Title</label>
              <input type="text" name="title" class="form-control" value="{{$data->title}}">
		  	</div>
		  	
              <div class="form-group">
                <input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
              <p><label for="file" style="cursor: pointer;">Featured Image</label></p>
             <div class="form-group">
		  		<label>Description</label>
              <textarea name="description" class="form-control" rows="10">{{$data->description}}</textarea>
              </div>
              @if($data->image)
              <p><img id="output" src="{{url('public/contents')}}/{{$data->image}}" /></p>
              @else
            <p><img id="output" width="200" /></p>
            @endif
            
        </div>
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
                <option>{{$data->category}}</option>   
                    @foreach($cats as $cat)
                        @if($cat->title != $data->category)
                <option>{{$cat->title}}</option>
                        @endif
                     @endforeach
                <option>home</option>
          </select>
              </div>
              
              
              <div class="form-group">
                <label>Status</label>
        <select class="form-control" name="status">
                <label>Status</label>
                    <option>{{$data->status}}</option>
                    @if ($data->status == 'off')
                    <option>on</option>
                    @else
                    <option>off</option>
                    @endif
          </select>

              </div>

			<div class="form-group">
				<button class="btn btn-success">Update Post</button>
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

<script src="{{url('resources/views/backend/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('description',{});
</script>

@stop
