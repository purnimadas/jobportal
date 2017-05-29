@extends('layout.master1')

@section('content')
	
<p>{{$job->company_name }}</p>
<p>{{$job->job_post }}</p>
<p>{{$job->job_vacancy }}</p> 
<p>{{$job->job_description }}</p> 

		
@stop