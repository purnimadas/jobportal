@extends('layout.master1')

@section('content')
	
<h3 style="margin-left: 400px">Login</h3>

        



	<form action="{{action('JobsController@login')}}" method="POST" class="form-horizontal" role="form" class="text-center">

         <label for="email">Email</label>
         <input type="text" id="email" value="{{Input::old('email')}}" name="email" >{{$errors->first('email')}}
         
         <label for="password">Password</label>
         <input type="password" id="password" value="{{Input::old('password')}}" name="password" >{{$errors->first('password')}}

         <input type="submit" value="Login"> 
		

     
	</form>

		
@stop