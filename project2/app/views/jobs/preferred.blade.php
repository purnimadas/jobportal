@extends('layout.master1')

@section('content')
<h1>Preference</h1>
	
<div>

 
	<form action="{{action('JobsController@store_preferred')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

	   
      
       
       <label for="preferred_district">Preferred District</label>
       <input type="text" id="preferred_district" value="{{Input::old('preferred_district')}}" name="preferred_district" placeholder="Preferred District..">{{$errors->first('preferred_district')}}

	   <label for="preferred_country">Preferred Country</label>
       <input type="text" id="preferred_country" value="{{Input::old('preferred_country')}}" name="preferred_country" placeholder="Preferred Country..">{{$errors->first('preferred_country')}}

       <label for="preferred_category">Preferred Country</label>
       <input type="text" id="preferred_category" value="{{Input::old('preferred_category')}}" name="preferred_category" placeholder="Preferred Country..">{{$errors->first('preferred_category')}}


       

	   
       <input type="submit" value="Submit"> 
		
	</form>
</div>

		
@stop