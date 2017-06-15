@extends('layout.master1')

@section('content')
	
<div>

 <!-- {{print_r($categories)}}-->
	<form action="{{action('JobsController@store_job')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

	   <label for="category">Category</label>
       {{Form::select('category', [''=>'Please Select']+$categories, Input::old('category',''),['id'=>'category'])}}

      
       
       <label for="fname">Company Name</label>
       <input type="text" id="fname" value="{{Input::old('company_name')}}" name="company_name" placeholder="Company Name..">{{$errors->first('company_name')}}

	   <label for="job_post">Job Post</label>
       <input type="text" id="job_post" value="{{Input::old('job_post')}}" name="job_post" placeholder="Job Post..">{{$errors->first('job_post')}}

       <label for="job_description">Job Description</label>
       <input type="text" id="job_description" value="{{Input::old('job_description')}}" name="job_description" placeholder="Job Description..">{{$errors->first('job_description')}}


       <label for="job_nature">Job Nature</label>
       <input type="text" id="job_nature" value="{{Input::old('job_nature')}}" name="job_nature" placeholder="Job Nature..">{{$errors->first('job_nature')}}

		
       <label for="educational_requirements">Educational Requirements</label>
       <input type="text" id="educational_requirements" value="{{Input::old('educational_requirements')}}" name="educational_requirements" placeholder="Educational Requirements..">{{$errors->first('educational_requirements')}}


	   <label for="experience">Experience</label>
       <input type="text" id="experience" value="{{Input::old('experience')}}" name="experience" placeholder="Job Experience..">{{$errors->first('experience')}}


       <label for="job_location">Job Location</label>
       <input type="text" id="job_location" value="{{Input::old('job_location')}}" name="job_location" placeholder="Job Location..">{{$errors->first('job_location')}}

	   <label for="salary_range">Salary Range</label>
       <input type="text" id="salary_range" value="{{Input::old('salary_range')}}" name="salary_range" placeholder="Salary Range..">{{$errors->first('salary_range')}}

       <label for="starting_date">Starting Date</label>
       <input type="date" id="starting_date" value="{{Input::old('starting_date')}}" name="starting_date" placeholder="Starting Date..">{{$errors->first('starting_date')}}

       <label for="ending_date">Ending Date</label>
       <input type="date" id="ending_date" value="{{Input::old('ending_date')}}" name="ending_date" placeholder="Ending Date..">{{$errors->first('ending_date')}}



	    <div class="form-group">
			<label for="input-id" class="col-sm-2 control-label">Company Logo</label>
			<div class="col-sm-6">
				<input type="file" class="form-control"  name="image">
			</div>
		</div>


		<input type="submit" value="Submit"> 
		
				
			
	

		
	</form>
</div>

		
@stop