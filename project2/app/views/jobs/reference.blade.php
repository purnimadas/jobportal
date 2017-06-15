@extends('layout.master1')

@section('content')
<h1>References</h1>
	
<div>

 
	<form action="{{action('JobsController@store_reference')}}" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">

	   
      
       
       <label for="name">Name</label>
       <input type="text" id="name" value="{{Input::old('name')}}" name="name" placeholder="Name..">{{$errors->first('name')}}

	<label for="organization">Organization</label>
       <input type="text" id="organization" value="{{Input::old('organization')}}" name="organization" placeholder="Organization..">{{$errors->first('organization')}}

       <label for="designation">Designation</label>
       <input type="text" id="designation" value="{{Input::old('designation')}}" name="designation" placeholder="Designation..">{{$errors->first('designation')}}

       <label for="address">Address</label>
       <input type="text" id="address" value="{{Input::old('address')}}" name="address" placeholder="Address..">{{$errors->first('address')}}


       <label for="mobile">Mobile</label>
       <input type="text" id="mobile" value="{{Input::old('mobile')}}" name="mobile" placeholder="Mobile..">{{$errors->first('mobile')}}
       
       

	   
       <input type="submit" value="Submit"> 
		
	</form>
</div>
<a href="">Skip</a>

		
@stop