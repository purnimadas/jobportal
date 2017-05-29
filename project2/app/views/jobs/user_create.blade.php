@extends('layout.master1')

@section('content')
	


	<form action="{{action('JobsController@store_user')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

		
     
     

		<div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" value="{{Input::old('email')}}" name="email">{{$errors->first('email')}}
			</div>
		</div>

		<div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-6">
				<input type="password" class="form-control" value="{{Input::old('password')}}" name="password">{{$errors->first('password')}}
			</div>
		</div>


		<div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">User type</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" value="{{Input::old('user_type')}}" name="user_type">{{$errors->first('user_type')}}
			</div>
		</div>


		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>


	</form>


		
@stop