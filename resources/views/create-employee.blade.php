@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Employee<a href="{{ url('/employees') }}" class="pull-right">Back</a></div>
                <div class="panel-body">
                	<div class="row">
                		<div class="col-md-12">
                			@if ($errors->any() )
								<div class="alert alert-warning">Error Occured! Please check the fields.</div>
							@endif

							@if(Session::has('success'))
					          	<div class="alert alert-warning">
					            	{{ Session::get('success') }}
					          	</div>
						  	@endif
		                   	<form action="{{ url('employees') }}" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ Session::token() }}" />
								<div class="row">
									<div class="form-group col-md-6">
										<label>Firstname</label>
										<input type="text" name="firstname" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label>Lastname</label>
										<input type="text" name="lastname" class="form-control">
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-4">
										<label>Gender</label>
										<select name="gender" class="form-control">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>Birthday</label>
										<input type="date" name="birthday" class="form-control">
									</div>
									<div class="form-group col-md-4">
										<label>Email</label>
										<input type="text" name="email" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address"></textarea>
								</div>
								<div class="row">
									<div class="form-group col-md-6">
										<label>Upload Photo</label>
										<input type="file" name="photo" class="form-control">
									</div>
								</div>
								<div class="form-group text-center">
									<br>
									<button class="btn btn-primary btn-lg">Save</button>
									<button type="reset" class="btn btn-lg">Clear</button>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
