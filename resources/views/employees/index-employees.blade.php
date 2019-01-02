@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>Employees<small>Manage Information</small></h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><i class="fa fa-users"></i>  Employees</li>
	</ol>
</section>
<section class="content container-fluid">
	<div class="box box-primary">
		<div class="box-header with-border custom-header-padding02"><h3 class="box-title">All Employees</h3>
			<div class="box-tools pull-right">
				<ul class="list-inline">
					<li><a href="{{ route('info.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> New Employee</a></li>
				</ul>
			</div>
		</div>
		<div class="box-body">
			@if(Session::has('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
			@endif
			@if (count($employees) > 0)
			<div class="table-responsive">
				<table class="table table-hover" id="dataTable">
					<thead>
						<tr>
							<th>ID</th>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Email</th>
							<th>Phone</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($employees as $emp)
						<tr class="{{ $emp->status == 1 ? "ok" : "resigned" }}">
							<td>{{ $emp->employee_id }}</a></td>
							<td>{{ $emp->firstname }}</td>
							<td>{{ $emp->lastname }}</td>
							<td>{{ $emp->email->email }}</td>
							<td>{{ $emp->phone }}</td>
							<td class="text-center">
								<ul class="list-inline">
									<li><a href="{{ url('/employees/info/'.$emp->employee_id) }}"><i class="fa fa-search"></i> View</a></li>
									<li><a href="{{ url('/employees/info/'.$emp->employee_id.'/edit') }}"><i class="fa fa-edit"></i> Edit</a></li>
									<li>
										<a href="{{ route('info.destroy', $emp->userRandomId) }}" onclick="event.preventDefault(); document.getElementById('delete-form').submit(); return confirm('Delete?')" class="text-danger"><i class="fa fa-trash"></i> Delete</a>

										<form id="delete-form" action="{{ route('info.destroy', $emp->userRandomId) }}" method="POST" style="display: none;"><input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="{{ Session::token() }}" />
									</form></li>
								</ul>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			@else
				<div class="alert alert-warning">
					No employees yet!
				</div>
			@endif
		</div>
	</div>
</section>
@endsection