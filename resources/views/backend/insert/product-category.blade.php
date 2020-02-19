@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>Product Categories</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Product Categories</li>
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
		  <form method="post" action="{{url('addProduct')}}">
		  	{{ csrf_field() }}
		  	<input type="hidden" name="tbl" value="{{encrypt('prodcats')}}">
		  	{{-- <div class="form-group">
		  		<input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>
				<p><label for="file" style="cursor: pointer;">Upload Image</label></p>
				<p><img id="output" width="200" /></p>
		  	</div> --}}
		  	<div class="form-group">
		  		<label>Title</label>
		  		<input type="text" name="title" class="form-control">
              </div>
              
              <div class="form-group">
                    <label>Status</label>
                    <select class="form-control" name="status">
                    <option>on</option>
                    <option>off</option>
              </select>
                </div>
			<div class="form-group">
				<button class="btn btn-success">Add Category</button>
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
                    @if(count($data) != 0)
                    @foreach($data as $key=>$category)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->status}}</td>
                    <td><a href="{{url('editProduct')}}/{{$category->pcid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                        <a href="{{url('deleteProduct')}}/{{$category->pcid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4">No Product categories found in the database</td>
                    </tr>
                    @endif
                </tbody>

            </table>
        </div>

        
	</div>
</section>
@stop
