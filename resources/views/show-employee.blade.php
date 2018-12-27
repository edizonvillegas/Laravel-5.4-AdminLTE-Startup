@extends('layouts.app')
@section('content')
<section class="content-header">
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
    </ol>
</section>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header"><h3 class="box-title">New Employee</h3></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							@if ($info->photo)
								<img src="/project01/{{ $info->photo }}" class="img-responsive col-md-3">
							@else
								<img src="{{ asset('dist/img/avatar.png') }}" class="img-responsive col-md-3">
							@endif
							<div class="table-responsive">
								<table class="table table-bordered">
									<tr>
										<th>Firstname</th>
										<td>{{ $info->firstname }}</td>
									</tr>
									<tr>
										<th>Lastname</th>
										<td>{{ $info->lastname }}</td>
									</tr>
									<tr>
										<th>Gender</th>
										<td>{{ $info->gender }}</td>
									</tr>
									<tr>
										<th>Birthday</th>
										<td>{{ date('F d, Y', strtotime($info->birthday) ) }}</td>
									</tr>
									<tr>
										<th>Email</th>
										<td>{{ $info->email }}</td>
									</tr>
									<tr>
										<th>Address</th>
										<td>{{ $info->address }}</td>
									</tr>
								</table>
							</div>
							<ul class="list-inline pull-right">
								<li>
									<a href="{{ url('/employees/'.$info->id.'/edit') }}" class="btn btn-primary">Update Info</a>
								</li>
								<li>
									<form action="{{ url('/employees/'.$info->userRandomId) }}" method="POST">
										<input type="hidden" name="_method" value="DELETE">
										<input type="hidden" name="_token" value="{{ Session::token() }}" />
										<button class="btn btn-danger" onclick="return confirm('Delete record?')">Delete User</button>
									</form>
								</li>
							</ul>
							@if(Session::has('success'))
							<div class="alert alert-success">
								{{ Session::get('success') }}
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection