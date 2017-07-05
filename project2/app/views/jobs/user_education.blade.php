@extends('layout.master1')

@section('content')
	

   @foreach ($educations as $education)

  <h2>{{$education->exam_title }} </h2> 
  <h2> {{$education->institution }}</h2>
   
   @endforeach
  

		
@stop