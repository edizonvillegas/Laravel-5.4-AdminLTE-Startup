@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>Employees Information</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="{{ url('/employees') }}}"><i class="fa fa-users"></i> Employees</a></li>
		<li class="active">{{ $info->firstname." ".$info->lastname }}</li>
	</ol>
</section>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-border"><h3 class="box-title">{{ $info->firstname . ' ' . $info->lastname }}</h3>
					<span class="pull-right label @if ($info->statuses->status_id === 1) label-success @else label-danger @endif">{{ $info->statuses->name }}</span>
				</div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#home">Basic</a></li>
								<li><a data-toggle="tab" href="#menu1">Address</a></li>
								<li><a data-toggle="tab" href="#menu2">Family</a></li>
								<li><a data-toggle="tab" href="#menu3">Education</a></li>
							</ul>
							
						</div>
						<div class="tab-content">
							<div id="home" class="tab-pane fade in active">
								<div class="col-md-12">
									@if ($info->photo)
									<img src="/project01/{{ $info->photo }}" class="img-responsive col-md-3 img01">
									@else
									<img src="{{ asset('dist/img/avatar.png') }}" class="img-responsive col-md-3 img01">
									@endif
									<h3>Basic Information</h3>
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th class="col-md-2">Firstname</th>
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
												<td>{{ $info->email->email }}</td>
											</tr>
											<tr>
												<th>Phone</th>
												<td>{{ $info->phone }}</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div id="menu1" class="tab-pane fade">
								<div class="col-md-12">
									<h3>Address Information</h3>
									<div class="table-responsive">
										<table class="table table-bordered">
											<tr>
												<th>Present Address</th>
												<td>{{ implode(
													[
													$info->address->present_address_no,
													$info->address->present_address_street,
													$info->address->present_address_barangay,
													$info->address->present_address_city,
													$info->address->present_address_country,
													$info->address->present_address_zipcode
													],
													" "
												)  }}</td>
											</tr>
											<tr>
												<th>Permanent Address</th>
												<td>{{ implode(
													[
													$info->address->permanent_address_no,
													$info->address->permanent_address_street,
													$info->address->permanent_address_barangay,
													$info->address->permanent_address_city,
													$info->address->permanent_address_country,
													$info->address->permanent_address_zipcode
													],
													" "
												)  }}</td>
											</tr>
										</table>
									</div>
								</div>
							</div>
							<div id="menu2" class="tab-pane fade">
								<div class="col-md-12">
									<h3>Family Background</h3>
									
									<div class="box box-primary">
										<div class="box-header with-border">
											<h5 class="box-title">Mother</h5>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr>
														<th class="col-md-2">Name</th>
														<td>{{ $info->family->mother_firstname . ' ' . $info->family->mother_lastname }}</td>
													</tr>
													<tr>
														<th>Birthday</th>
														<td>{{ $info->family->mother_birthdate }}</td>
													</tr>
													<tr>
														<th>Occupation</th>
														<td>{{ $info->family->mother_occupation }}</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="box box-primary">
										<div class="box-header with-border">
											<h5 class="box-title">Father</h5>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr>
														<th class="col-md-2">Name</th>
														<td>{{ $info->family->father_firstname . ' ' . $info->family->father_lastname }}</td>
													</tr>
													<tr>
														<th>Birthday</th>
														<td>{{ $info->family->father_birthdate }}</td>
													</tr>
													<tr>
														<th>Occupation</th>
														<td>{{ $info->family->father_occupation }}</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="menu3" class="tab-pane fade">
								<div class="col-md-12">
									<h3>Education Background</h3>
									<div class="box box-primary">
										<div class="box-header with-border">
											<h5 class="box-title">Primary School</h5>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr>
														<th class="col-md-2">Name</th>
														<td>{{ $info->education->primary_school_name }}</td>
													</tr>
													<tr>
														<th>From - To</th>
														<td>{{ $info->education->primary_school_year_from . ' - ' . $info->education->primary_school_year_to }}</td>
													</tr>
													<tr>
														<th>Address</th>
														<td>{{ implode(
															[
															$info->school_address->primary_address_no,
															$info->school_address->primary_address_street,
															$info->school_address->primary_address_barangay,
															$info->school_address->primary_address_city,
															$info->school_address->primary_address_country,
															$info->school_address->primary_address_zipcode
															],
															" "
														)  }}</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="box box-primary">
										<div class="box-header with-border">
											<h5 class="box-title">Secondary School</h5>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr>
														<th class="col-md-2">Name</th>
														<td>{{ $info->education->secondary_school_name }}</td>
													</tr>
													<tr>
														<th>From - To</th>
														<td>{{ $info->education->secondary_school_year_from . ' - ' . $info->education->secondary_school_year_to }}</td>
													</tr>
													<tr>
														<th>Address</th>
														<td>{{ implode(
															[
															$info->school_address->secondary_address_no,
															$info->school_address->secondary_address_street,
															$info->school_address->secondary_address_barangay,
															$info->school_address->secondary_address_city,
															$info->school_address->secondary_address_country,
															$info->school_address->secondary_address_zipcode
															],
															" "
														)  }}</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="box box-primary">
										<div class="box-header with-border">
											<h5 class="box-title">College School</h5>
										</div>
										<div class="box-body">
											<div class="table-responsive">
												<table class="table table-bordered">
													<tr>
														<th class="col-md-2">Name</th>
														<td>{{ $info->education->college_school_name }}</td>
													</tr>
													<tr>
														<th>Course</th>
														<td>{{ $info->education->college_school_course }}</td>
													</tr>
													<tr>
														<th>From - To</th>
														<td>{{ $info->education->college_school_year_from . ' - ' . $info->education->college_school_year_to }}</td>
													</tr>
													<tr>
														<th>Address</th>
														<td>{{ implode(
															[
															$info->school_address->college_address_no,
															$info->school_address->college_address_street,
															$info->school_address->college_address_barangay,
															$info->school_address->college_address_city,
															$info->school_address->college_address_country,
															$info->school_address->college_address_zipcode
															],
															" "
														)  }}</td>
													</tr>
												</table>
											</div></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<ul class="list-inline pull-right">
									<li>
										<a href="{{ url('/employees/info/'.$info->employee_id.'/edit') }}" class="btn btn-primary">Update Info</a>
									</li>
									<li>
										<form action="{{ route('info.destroy', $info->userRandomId) }}" method="POST">
											<input type="hidden" name="_method" value="DELETE">
											<input type="hidden" name="_token" value="{{ Session::token() }}" />
											<button class="btn btn-danger" onclick="return confirm('Delete record?')">Delete User</button>
										</form>
									</li>
								</ul>
							</div>
							@if(Session::has('success'))
							<div class="alert alert-success">
								{{ Session::get('success') }}
							</div>
							@endif
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="box box-primary">
					<div class="box-header with-border"><h3 class="box-title">Projects</h3></div>
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								@if (count($info->tasks) > 0)
								@foreach($info->tasks as $info)
								<ul>
									@foreach($info->projects as $project)
									<li>{{ $project->name }}</li>
									@endforeach
								</ul>
								@endforeach
								@else
								<div class="alert alert-info"><i class="fa fa-info-circle"></i> No projects yet!</div>
								@endif
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	@endsection