@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>Employees<small>Manage Information</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><i class="fa fa-users"></i>  Projects</li>
	</ol>
</section>
<section class="content container-fluid">
	<div class="box box-primary">
		<div class="box-header with-border  custom-header-padding02"><h3 class="box-title">All Projects</h3>
			<div class="box-tools pull-right">
				<ul class="list-inline">
					<li><a href="#" class="btn btn-success"><i class="fa fa-plus"></i> New Project</a></li>
				</ul>
			</div>
		</div>
		<div class="box-body">
			@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
			@if (count($projects) > 0)
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>Name</th>
								<th>Description</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($projects as $proj)
							<tr class="{{ $proj->status == 1 ? "ok" : "resigned" }}">
								<td>{{ $proj->projects_id }}</a></td>
								<td>{{ $proj->name }}</td>
								<td>{{ str_limit($proj->description, 50) }}</td>
								<td class="text-center">
									<ul class="list-inline">
										<li><a href="{{ url('/projects/'.$proj->projects_id) }}"><i class="fa fa-search"></i> View</a></li>
										<li><a href="{{ url('/projects/'.$proj->projects_id.'/edit') }}"><i class="fa fa-edit"></i> Edit</a></li>
										<li><a onclick="return confirm('Delete?')" class="text-danger" href="{{ url('/projects/'.$proj->projects_id.'/delete') }}"><i class="fa fa-trash"></i> Delete</a></li>
									</ul>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			@else
				<div class="alert alert-warning">
					No project yet!
				</div>
			@endif
		</div>
	</div>
</section>
@endsection