@extends('layout.master1')

@section('content')
	
<form action="{{action('JobsController@store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

		
   
     

		


		


		

		
		<div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Job Location</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" value="{{Input::old('job_location')}}" name="job_location">{{$errors->first('job_location')}}
			</div>
		</div>
		<div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Salary Range</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" value="{{Input::old('salary_range')}}" name="salary_range">{{$errors->first('salary_range')}}
			</div>
		</div>

		<div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Starting date</label>
			<div class="col-sm-6">
				<input type="date" class="form-control" value="{{Input::old('starting_date')}}" name="starting_date">{{$errors->first('starting_date')}}
			</div>
		</div>

		
	</form>


		
@stop