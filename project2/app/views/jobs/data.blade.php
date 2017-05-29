@extends('layout.master1')

@section('content')
	<h3 class="text-center">All users Information</h3>


	 
	<p class="text-right">{{Auth::user()->email}}<a href="{{action('JobsController@index')}}"> Logout</a></p>


	@if(count($users))
		<table class="table">
			<tr>
				
				<th>Email</th>
				<th>Password</th>
				<th>User Type</th>
				
				
			</tr>

			@foreach ($users as $user)
			<tr>
				
				<td>{{$user->email }} </td>
				<td>{{$user->password }} </td>
				<td>{{$user->user_type }} </td>
				
                

			
			</tr>   
			@endforeach
		</table>
	@else
		<p>No Contacts</p>
	@endif


@stop