@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Employees
                	<ul class="list-inline pull-right">
	                	<li><a href="{{ url('/employees/create') }}">+ New</a></li>
	                	<li><a href="{{ url('/') }}">- Back</a></li>
	                </ul>
                </div>
                <div class="panel-body">
                	@if(Session::has('success'))
			          	<div class="alert alert-success">
			            	{{ Session::get('success') }}
			          	</div>
				  	@endif
                	<div class="table-responsive">
	                   <table class="table table-condensed table-hover table-striped">
	                   		<thead>
	                   			<tr>
	                   				<th>ID</th>
	                   				<th>Firstname</th>
	                   				<th>Lastname</th>
	                   				<th>Email</th>
	                   				<th></th>
	                   			</tr>
	                   		</thead>
	                   		<tbody>
	                   			@foreach($employees as $emp)
	                   			<tr>
	               					<td>{{ $emp->id }}</td>
	               					<td>{{ $emp->firstname }}</td>
	               					<td>{{ $emp->lastname }}</td>
	               					<td>{{ $emp->email }}</td>
	               					<td><a href="{{ url('/employees/'.$emp->id) }}">View</a></td>
	                   			</tr>
	                   			@endforeach
	                   		</tbody>
	                   </table>
	               </div>
	               <div class="pull-right">
	                   {{ $employees->links() }}
	               </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
