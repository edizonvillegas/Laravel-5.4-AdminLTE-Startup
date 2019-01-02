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
				<div class="box-header with-border"><h3 class="box-title">{{ $projects->name }}</h3></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							
							<p>Description : {{ $projects->description }}</p>
							
							<ul class="list-inline pull-right">
								<li>
									<a href="#" class="btn btn-primary">Update Info</a>
								</li>
								<li>
									<form action="#" method="POST">
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
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-border"><h3 class="box-title">Projects</h3></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th>Coder</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($projects->tasks as $project)
										<tr>
											<td>
												@foreach ($project->employees as $emp)
													{{ $emp->firstname }}
												@endforeach
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection