@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>All Products</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All Products</li>
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
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Feature Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$prod)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$prod->title}}</td>
                        <td>{{$prod->category}}</td>
                        <td>
                            @if($prod->image)
                           <img src="{{url('public/products')}}/{{$prod->image}}" width="50">
                            @endif
                        </td>
                        <td>{{$prod->status}}</td>
                        <td><a href="{{('editproduct')}}/{{$prod->pid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('delproduct')}}/{{$prod->pid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        
	</div>
</section>
@stop
