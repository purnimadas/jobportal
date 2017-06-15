@extends('layout.master1')

@section('content')
<h1>Personal Details</h1>
	
<div>

 
	<form action="{{action('JobsController@store_jobseeker')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

	   
      <input type="hidden" id="user_id" value="{{$user->id}}" name="user_id">

       
       <label for="name"> Name</label>
       <input type="text" id="name" value="{{Input::old('name')}}" name="name" placeholder="Your Name..">{{$errors->first('name')}}

	   <label for="father">Father's Name</label>
       <input type="text" id="father" value="{{Input::old('father')}}" name="father" placeholder="Your Father's Name..">{{$errors->first('father')}}

       <label for="mother">Mother's Name</label>
       <input type="text" id="mother" value="{{Input::old('mother')}}" name="mother" placeholder="Your Mother's Name..">{{$errors->first('mother')}}


       <label for="dob">Date of Birth</label>
       <input type="date" id="dob" value="{{Input::old('dob')}}" name="dob" placeholder="Date of Birth..">{{$errors->first('dob')}}

		
       <label for="nationality">Nationality</label>
       <input type="text" id="nationality" value="{{Input::old('nationality')}}" name="nationality" placeholder="Nationality">{{$errors->first('nationality')}}


	   <label for="national_id">National Id</label>
       <input type="text" id="national_id" value="{{Input::old('national_id')}}" name="national_id" placeholder="National Id Number..">{{$errors->first('national_id')}}


       <label for="religion">Religion</label>
       <input type="text" id="religion" value="{{Input::old('religion')}}" name="religion" placeholder="Religion..">{{$errors->first('religion')}}

	   <label for="status">Gender</label>
       {{Form::select('status', [''=>'Please Select']+$status, Input::old('status',''),['id'=>'status'])}}



	    <div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Upload Your Image</label>
			<div class="col-sm-6">
				<input type="file" class="form-control"  name="image">
			</div>
		</div>


		<input type="submit" value="Submit"> 
		
				
			
	

		
	</form>
</div>

		
@stop