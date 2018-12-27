@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Employee<a href="{{ url('/employees/'.$info->id) }}" class="pull-right">Cancel</a></div>
                <div class="panel-body">
                	<div class="row">
                		<div class="col-md-12">
                			@if ($errors->any() )
								<ul>
									@foreach($errors->all() as $error)
										<li><div class="alert alert-warning">{{ $error }}</div></li>
									@endforeach
								</ul>
							@endif

							@if(Session::has('success'))
						          <div class="alert alert-success">
						            	{{ Session::get('success') }}
						          </div>
						  	@endif
		                   	<form action="{{ url('/employees/'.$info->id) }}" method="POST" enctype="multipart/form-data">
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
									<div class="form-group col-md-4">
										<label>Gender</label>
										<select name="gender" class="form-control">
											<option value="male" @if($info->gender == 'male') selected @endif>Male</option>
											<option value="female" @if($info->gender == 'female') selected @endif>Female</option>
										</select>
									</div>
									<div class="form-group col-md-4">
										<label>Birthday</label>
										<input type="date" name="birthday" class="form-control"  value="{{ $info->birthday }}">
									</div>
									<div class="form-group col-md-4">
										<label>Email</label>
										<input type="text" name="email" class="form-control"  value="{{ $info->email }}">
									</div>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address">{{ $info->address }}</textarea>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<div class="row">
											<div class="col-md-3">
												<img src="/project01/{{ $info->photo }}" class="img-responsive">
											</div>
											<div class="form-group col-md-6">
												<label>Upload Photo</label>
												<input type="file" name="photo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group pull-right">
									<br>
									{{ method_field('PATCH') }}
									<input type="hidden" name="formSecret" value="{{ $info->userRandomId }}">
									<button class="btn btn-primary btn-lg">Save</button>
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
