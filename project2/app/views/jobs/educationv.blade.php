@extends('layout.master1')

@section('content')
	
@if(count($educations))
   @foreach ($educations as $education)

  <h2>{{$education->exam_title }} <small>user is{{$education->user->email}}</small></h2> 
  <h2> {{$education->institution }}</h2>
   
   @endforeach
@endif   

		
@stop