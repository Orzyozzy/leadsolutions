@extends('backend.master')
@section('content')
<section class="content-header">
  <h1>
    Dashboard
    <small>All Team</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">All Team</li>
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
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Feature Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key=>$member)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->designation}}</td>
                        <td>
                            @if($member->image)
                           <img src="{{url('public/teams')}}/{{$member->image}}" width="50">
                            @endif
                        </td>
                        <td>{{$member->status}}</td>
                        <td><a href="{{('editPost')}}/{{$member->tid}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
                            <a href="{{url('deletePost')}}/{{$member->tid}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

        
	</div>
</section>
@stop
