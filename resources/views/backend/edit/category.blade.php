@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Edit Category</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Category</li>
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
           
        <form method="post" action="{{url('updateCategory')}}/{{$maindata->cid}}">
           
		  	{{ csrf_field() }}
              <input type="hidden" name="tbl" value="{{encrypt('categories')}}">
              <input type="hidden" name="cid" value="{{$maindata->cid}}">
		  	{{-- <div class="form-group">
		  		<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
				<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
				<p><img id="output" width="200" /></p>
		  	</div> --}}
		  	<div class="form-group">
		  		<label>Title</label>
              <input type="text" name="title" value="{{$maindata->title}}"class="form-control">
              </div>
              
              <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                    <option>{{$maindata->status}}</option>
                    @if ($maindata->status == 'off')
                    <option>on</option>
                    @else
                    <option>off</option>
                    @endif
                </select>
                </div>
			<div class="form-group">
				<button class="btn btn-success">Update Category</button>
			</div>
		  </form>
		</div>
        <div class="col-sm-6">
            <p><strong>View All Categories</strong></p>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$category)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->status}}</td>
                    <td><a href="{{('editCategory')}}/{{$category->cid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                        <a href="{{url('deleteCategory')}}/{{$category->cid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        
	</div>
</section>
@stop
