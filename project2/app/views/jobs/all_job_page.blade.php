@extends('layout.master1')

@section('content')
	
@if(count($jobs))
   @foreach ($jobs as $job)

   <a href="">{{$job->company_name }}</a>
   <a href="">{{$job->job_post }}</a>
   <a href="">{{$job->job_vacancy }}</a>
   @endforeach
@endif   

		
@stop