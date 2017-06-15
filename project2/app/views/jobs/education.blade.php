@extends('layout.master1')

@section('content')
<h1>Educational Requirements</h1>
	
<div>

 
	<form action="{{action('JobsController@store_education')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

	   
      
       
       <label for="exam_title">Examination Title</label>
       <input type="text" id="exam_title" value="{{Input::old('exam_title')}}" name="exam_title" placeholder="Examination Title..">{{$errors->first('exam_title')}}

	   <label for="institution">Institution</label>
       <input type="text" id="institution" value="{{Input::old('institution')}}" name="institution" placeholder="Institution..">{{$errors->first('institution')}}

       <label for="group">Group</label>
       <input type="text" id="group" value="{{Input::old('group')}}" name="group" placeholder="Group..">{{$errors->first('group')}}


       <label for="result">Result</label>
       <input type="text" id="result" value="{{Input::old('result')}}" name="result" placeholder="Result..">{{$errors->first('result')}}

		
       <label for="pass_year">Passing Year</label>
       <input type="date" id="pass_year" value="{{Input::old('pass_year')}}" name="pass_year" placeholder="Passing Year..">{{$errors->first('pass_year')}}


	   
       <input type="submit" value="Submit"> 
		
	</form>
</div>

		
@stop