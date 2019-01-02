@extends('layouts.app')
@section('content')
<section class="content-header">
	<h1>New Employee</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><a href="{{ url('/employees') }}"><i class="fa fa-users"></i>  Employees</a></li>
		<li class="active"><i class="fa fa-plus"></i>  New</li>
	</ol>
</section>
<section class="content container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				@if ($errors->any() )
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					Error Occured! Please check the fields.
				</div>
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
				<div class="box-header with-border"><h3 class="box-title">Basic Information</h3></div>
				<div class="box-body">
					<div class="row">
						<div class="col-md-12">
							<form action="{{ url('employees/info') }}" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ Session::token() }}" />
								<div class="row">
									<div class="form-group col-md-6">
										<label>Firstname</label>
										<input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}">
									</div>
									<div class="form-group col-md-6">
										<label>Lastname</label>
										<input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<label>Gender</label>
										<select name="gender" class="form-control">
											<option value="Male" @if(old('gender') === 'Male') selected @endif>Male</option>
											<option value="Female"@if(old('gender') === 'Female') selected @endif>Female</option>
										</select>
									</div>
									<div class="form-group col-md-3">
										<label>Birthday</label>
										<input type="date" name="birthday" class="form-control" value="{{ old('birthday') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Email</label>
										<input type="text" name="email" class="form-control" value="{{ old('email') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Phone</label>
										<input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><b>Present Address</b></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="present_address_no" class="form-control" value="{{ old('present_address_no') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="present_address_street" class="form-control" value="{{ old('present_address_street') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="present_address_barangay" class="form-control" value="{{ old('present_address_barangay') }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="present_address_city" class="form-control" value="{{ old('present_address_city') }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="present_address_country" class="form-control" value="{{ old('present_address_country') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="present_address_zipcode" class="form-control" value="{{ old('present_address_zipcode') }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><b><label for="sameAddress"><input type="checkbox" id="sameAddress"> Permanent Address</label></b></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="permanent_address_no" class="form-control" value="{{ old('permanent_address_no') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="permanent_address_street" class="form-control" value="{{ old('permanent_address_street') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="permanent_address_barangay" class="form-control" value="{{ old('permanent_address_barangay') }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="permanent_address_city" class="form-control" value="{{ old('permanent_address_city') }}">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="permanent_address_country" class="form-control" value="{{ old('permanent_address_country') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="permanent_address_zipcode" class="form-control" value="{{ old('permanent_address_zipcode') }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Family Background</h3></div>
									<div class="col-md-12 form-group"><b>Mother</b></div>
									<div class="form-group col-md-3">
										<label>Firstname</label>
										<input type="text" name="mother_firstname" class="form-control" value="{{ old('mother_firstname') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Lastname</label>
										<input type="text" name="mother_lastname" class="form-control" value="{{ old('mother_lastname') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Birthday</label>
										<input type="date" name="mother_birthdate" class="form-control" value="{{ old('mother_birthdate') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Occupation</label>
										<input type="text" name="mother_occupation" class="form-control" value="{{ old('mother_occupation') }}">
									</div>
									<div class="col-md-12 form-group"><b>Father</b></div>
									<div class="form-group col-md-3">
										<label>Firstname</label>
										<input type="text" name="father_firstname" class="form-control" value="{{ old('father_firstname') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Lastname</label>
										<input type="text" name="father_lastname" class="form-control" value="{{ old('father_lastname') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Birthday</label>
										<input type="date" name="father_birthdate" class="form-control" value="{{ old('father_birthdate') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Occupation</label>
										<input type="text" name="father_occupation" class="form-control" value="{{ old('father_occupation') }}">
									</div>
								</div>
								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Education Background</h3></div>
									<div class="col-md-12 form-group"><b>Primary</b></div>
									<div class="form-group col-md-6">
										<label>School</label>
										<input type="text" name="primary_school_name" class="form-control" value="{{ old('primary_school_name') }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="primary_school_year_from" class="form-control" value="{{ old('primary_school_year_from') }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="primary_school_year_to" class="form-control" value="{{ old('primary_school_year_to') }}">
									</div>

									<div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="primary_address_no" class="form-control" value="{{ old('primary_address_no') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="primary_address_street" class="form-control" value="{{ old('primary_address_street') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="primary_address_barangay" class="form-control" value="{{ old('primary_address_barangay') }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="primary_address_city" class="form-control" value="{{ old('primary_address_city') }}">
									</div>

									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="primary_address_country" class="form-control" value="{{ old('primary_address_country') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="primary_address_zipcode" class="form-control" value="{{ old('primary_address_zipcode') }}">
									</div>
								
									
									<div class="col-md-12 form-group custom-margin01"><b>Secondary</b></div>
									<div class="form-group col-md-6">
										<label>School</label>
										<input type="text" name="secondary_school_name" class="form-control" value="{{ old('secondary_school_name') }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="secondary_school_year_from" class="form-control" value="{{ old('secondary_school_year_from') }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="secondary_school_year_to" class="form-control" value="{{ old('secondary_school_year_to') }}">
									</div>
									
									<div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="secondary_address_no" class="form-control" value="{{ old('secondary_address_no') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="secondary_address_street" class="form-control" value="{{ old('secondary_address_street') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="secondary_address_barangay" class="form-control" value="{{ old('secondary_address_barangay') }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="secondary_address_city" class="form-control" value="{{ old('secondary_address_city') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="secondary_address_country" class="form-control" value="{{ old('secondary_address_country') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="secondary_address_zipcode" class="form-control" value="{{ old('secondary_address_zipcode') }}">
									</div>


									<div class="col-md-12 form-group custom-margin01"><b>College</b></div>
									<div class="form-group col-md-6">
										<label>School</label>
										<input type="text" name="college_school_name" class="form-control" value="{{ old('college_school_name') }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="college_school_year_from" class="form-control" value="{{ old('college_school_year_from') }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="college_school_year_to" class="form-control" value="{{ old('college_school_year_to') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Course</label>
										<input type="text" name="college_school_course" class="form-control" value="{{ old('college_school_course') }}">
									</div>
									
									<div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="college_address_no" class="form-control" value="{{ old('college_address_no') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="college_address_street" class="form-control" value="{{ old('college_address_street') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="college_address_barangay" class="form-control" value="{{ old('college_address_barangay') }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="college_address_city" class="form-control" value="{{ old('college_address_city') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="college_address_country" class="form-control" value="{{ old('college_address_country') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="college_address_zipcode" class="form-control" value="{{ old('college_address_zipcode') }}">
									</div>
								</div>



								<div class="row">
									<div class="box-header custom-header-padding with-border"><h3 class="box-title">Work Experienced</h3></div>
									<div class="form-group col-md-6">
										<label>Company Name</label>
										<input type="text" name="experienced_company_name" class="form-control" value="{{ old('experienced_company_name') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Position/Role</label>
										<input type="text" name="experienced_company_position" class="form-control" value="{{ old('experienced_company_position') }}">
									</div>
									<div class="form-group col-md-2">
										<label>From</label>
										<input type="text" name="experienced_company_start" class="form-control" value="{{ old('experienced_company_start') }}">
									</div>
									<div class="form-group col-md-2">
										<label>To</label>
										<input type="text" name="experienced_company_end" class="form-control" value="{{ old('experienced_company_end') }}">
									</div>
								

									<!-- <div class="box-header custom-header-padding03 col-md-12"><h5 class="box-title">(Address)</h5></div>
									<div class="form-group col-md-1">
										<label>No.</label>
										<input type="text" name="primary_address_no" class="form-control" value="{{ old('primary_address_no') }}">
									</div>
									<div class="form-group col-md-5">
										<label>Street</label>
										<input type="text" name="primary_address_street" class="form-control" value="{{ old('primary_address_street') }}">
									</div>
									<div class="form-group col-md-3">
										<label>Brgy.</label>
										<input type="text" name="primary_address_barangay" class="form-control" value="{{ old('primary_address_barangay') }}">
									</div>
									<div class="form-group col-md-3">
										<label>City</label>
										<input type="text" name="primary_address_city" class="form-control" value="{{ old('primary_address_city') }}">
									</div>

									<div class="form-group col-md-3">
										<label>Country</label>
										<input type="text" name="primary_address_country" class="form-control" value="{{ old('primary_address_country') }}">
									</div>
									<div class="form-group col-md-2">
										<label>Zip Code</label>
										<input type="text" name="primary_address_zipcode" class="form-control" value="{{ old('primary_address_zipcode') }}">
									</div> -->

								</div>


								<div class="row">
									<div class="box-header custom-header-padding with-border"></div>
									<div class="form-group col-md-4">
										<label>Status</label>
										<select name="status" class="form-control">
											<option value="1" @if(old('status') === 1) selected @endif>Active</option>
											<option value="2" @if(old('status') === 2) selected @endif>In-Active</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>Upload Photo</label>
										<input type="file" name="photo" class="form-control">
									</div>
								</div>
								<div class="form-group text-center">
									<br>
									<button class="btn btn-primary btn-lg">Save Information</button>
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