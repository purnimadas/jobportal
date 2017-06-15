@extends('layout.master')


@section('content')
	<h3>All Jobs</h3>

	<p class="text-right"><a href="{{action('JobsController@create_job')}}">Add Contact</a></p>

	@if(count($jobs))
		<table class="table">
			

			@foreach ($jobs as $job)
			<tr>
				
				<td><a href="{{action('JobsController@job_detail',$job->id)}}"><i><h2 id="com_name">            {{$job->company_name }} </h2> </i> </a>
				        
				        <h3>      {{$job->job_post }}  </h3>
				        <h3>Educational Requirements :{{$job->educational_requirements }}  </h3>
				        <h3>Experience :  {{$job->experience }}   </h3>
				      <a href="">  <h3>Expired Date :  {{$job->ending_date }} </h3></a>

				</td>
			
				
				
				
			</tr>
			@endforeach
		</table>
	@else
		<p>No Contacts</p>
	@endif


@stop

