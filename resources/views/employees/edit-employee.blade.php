@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>Employee Information</h1>
</section>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border"><h3 class="box-title">{{ $info->firstname . ' ' . $info->lastname }}</h3></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							@if ($errors->any() )
							<ul>
								@foreach($errors->all() as $error)
								<li><div class="alert alert-warning">{{ $error }}</div></li>
								@endforeach
							</ul>
							@endif
							@if (Session::has('success') )
							<div class="alert alert-success">
								{{ Session::get('success') }}
							</div>
							@elseif (Session::has('failed') )
							<div class="alert alert-danger">
								{{ Session::get('failed') }}
							</div>
							@endif
							<form action="{{ route('info.update', $info->employee_id) }}" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ Session::token() }}" />
								<div class="row">
									<div class="form-group col-md-6">
										<label>Firstname</label>
										<input type="text" name="firstname" class="form-control" value="{{ $info->firstname }}">
									</div>
									<div class="form-group col-md-6">
										<label>Lastname</label>
										<input type="text" name="lastname" class="form-control" value="{{ $info->lastname }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<label>Gender</label>
										<select name="gender" class="form-control">
											<option value="Male" @if($info->gender) === 'Male') selected @endif>Male</option>
											<option value="Female"@if($info->gender) === 'Female') selected @endif>Female</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Birthday</label>
										<input type="date" name="birthday" class="form-control" value="{{ $info->birthday }}">
									</div>
									<div class="form-group col-md-3">
										<label>Email</label>
										<input type="text" name="email" class="form-control" value="{{ $info->email->email }}">
									</div>
									<div class="form-group col-md-3">
										<label>Phone</label>
										<input type="text" name="phone" class="form-control" value="{{ $info->phone }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Present Address</h3></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="present_address_no" class="form-control" value="{{ $info->address->present_address_no }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="present_address_street" class="form-control" value="{{ $info->address->present_address_street }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="present_address_barangay" class="form-control" value="{{ $info->address->present_address_barangay }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="present_address_city" class="form-control" value="{{ $info->address->present_address_city }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="present_address_country" class="form-control" value="{{ $info->address->present_address_country }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="present_address_zipcode" class="form-control" value="{{ $info->address->present_address_zipcode }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Permanent Address</h3></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="permanent_address_no" class="form-control" value="{{ $info->address->permanent_address_no }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="permanent_address_street" class="form-control" value="{{ $info->address->permanent_address_street }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="permanent_address_barangay" class="form-control" value="{{ $info->address->permanent_address_barangay }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="permanent_address_city" class="form-control" value="{{ $info->address->permanent_address_city }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="permanent_address_country" class="form-control" value="{{ $info->address->permanent_address_country }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="permanent_address_zipcode" class="form-control" value="{{ $info->address->permanent_address_zipcode }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Family Background</h3></div>
									<div class="col-md-12 form-group"><b>Mother</b></div>
									<div class="form-group col-md-3">
										<label>Firstname</label>
										<input type="text" name="mother_firstname" class="form-control" value="{{ $info->family->mother_firstname }}">
									</div>
									<div class="form-group col-md-3">
										<label>Lastname</label>
										<input type="text" name="mother_lastname" class="form-control" value="{{ $info->family->mother_lastname }}">
									</div>
									<div class="form-group col-md-3">
										<label>Birthday</label>
										<input type="date" name="mother_birthdate" class="form-control" value="{{ $info->family->mother_birthdate }}">
									</div>
									<div class="form-group col-md-3">
										<label>Occupation</label>
										<input type="text" name="mother_occupation" class="form-control" value="{{ $info->family->mother_occupation }}">
									</div>
									<div class="col-md-12 form-group"><b>Father</b></div>
									<div class="form-group col-md-3">
										<label>Firstname</label>
										<input type="text" name="father_firstname" class="form-control" value="{{ $info->family->father_firstname }}">
									</div>
									<div class="form-group col-md-3">
										<label>Lastname</label>
										<input type="text" name="father_lastname" class="form-control" value="{{ $info->family->father_lastname }}">
									</div>
									<div class="form-group col-md-3">
										<label>Birthday</label>
										<input type="date" name="father_birthdate" class="form-control" value="{{ $info->family->father_birthdate }}">
									</div>
									<div class="form-group col-md-3">
										<label>Occupation</label>
										<input type="text" name="father_occupation" class="form-control" value="{{ $info->family->father_occupation }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Education Background</h3></div>
									<div class="col-md-12 form-group"><b>Primary</b></div>
									<div class="form-group col-md-6">
										<label>School</label>
										<input type="text" name="primary_school_name" class="form-control" value="{{ $info->education->primary_school_name }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="primary_school_year_from" class="form-control" value="{{ $info->education->primary_school_year_from }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="primary_school_year_to" class="form-control" value="{{ $info->education->primary_school_year_to }}">
									</div>

									<div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="primary_address_no" class="form-control" value="{{ $info->school_address->primary_address_no }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="primary_address_street" class="form-control" value="{{ $info->school_address->primary_address_street }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="primary_address_barangay" class="form-control" value="{{ $info->school_address->primary_address_barangay }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="primary_address_city" class="form-control" value="{{ $info->school_address->primary_address_city }}">
									</div>

									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="primary_address_country" class="form-control" value="{{ $info->school_address->primary_address_country }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="primary_address_zipcode" class="form-control" value="{{ $info->school_address->primary_address_zipcode }}">
									</div>



									<div class="col-md-12 form-group"><b>Secondary</b></div>
									<div class="form-group col-md-6">
										<label>School</label>
										<input type="text" name="secondary_school_name" class="form-control" value="{{ $info->education->secondary_school_name }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="secondary_school_year_from" class="form-control" value="{{ $info->education->secondary_school_year_from }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="secondary_school_year_to" class="form-control" value="{{ $info->education->secondary_school_year_to }}">
									</div>

									<div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="secondary_address_no" class="form-control" value="{{ $info->school_address->secondary_address_no }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="secondary_address_street" class="form-control" value="{{ $info->school_address->secondary_address_street }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="secondary_address_barangay" class="form-control" value="{{ $info->school_address->secondary_address_barangay }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="secondary_address_city" class="form-control" value="{{ $info->school_address->secondary_address_city }}">
									</div>

									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="secondary_address_country" class="form-control" value="{{ $info->school_address->secondary_address_country }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="secondary_address_zipcode" class="form-control" value="{{ $info->school_address->secondary_address_zipcode }}">
									</div>

									<div class="col-md-12 form-group"><b>College</b></div>
									<div class="form-group col-md-6">
										<label>School</label>
										<input type="text" name="college_school_name" class="form-control" value="{{ $info->education->college_school_name }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="college_school_year_from" class="form-control" value="{{ $info->education->college_school_year_from }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="college_school_year_to" class="form-control" value="{{ $info->education->college_school_year_to }}">
									</div>
									<div class="form-group col-md-5">
										<label>Course</label>
										<input type="text" name="college_school_course" class="form-control" value="{{ $info->education->college_school_course }}">
									</div>

									<div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="college_address_no" class="form-control" value="{{ $info->school_address->college_address_no }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="college_address_street" class="form-control" value="{{ $info->school_address->college_address_street }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="college_address_barangay" class="form-control" value="{{ $info->school_address->college_address_barangay }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="college_address_city" class="form-control" value="{{ $info->school_address->college_address_city }}">
									</div>

									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="college_address_country" class="form-control" value="{{ $info->school_address->college_address_country }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="college_address_zipcode" class="form-control" value="{{ $info->school_address->college_address_zipcode }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"></div>
									<div class="form-group col-md-4">
										<label>Status</label>
										<select name="status" class="form-control">
											<option value="1" @if($info->statuses->status) === 1) selected @endif>Active</option>
											<option value="2" @if($info->statuses->status) === 2) selected @endif>In-Active</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>Upload Photo</label>

										<input type="file" name="photo" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<img src="/project01/{{ $info->photo }}" class="img-responsive">
									</div>
								</div>
								<div class="form-group text-center">
									<br>
									{{ method_field('PATCH') }}
									<input type="hidden" name="oldPhoto" value="{{ $info->photo }}">
									<input type="hidden" name="formSecret" value="{{ $info->userRandomId }}">
									<input type="hidden" name="id" value="{{ $info->employee_id }}">
									<button class="btn btn-primary btn-lg">Update Information</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection