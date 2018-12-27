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
                			<img src="/project01/{{ $info->photo }}" class="img-responsive col-md-3">
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
</div>
@endsection
