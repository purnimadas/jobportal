@extends('layout.master1')


@section('content')
	<h3>All Jobs</h3>

	
	@if(count($jobs))
		<table class="table">
			

			@foreach ($jobs as $job)
			<tr>
				
				<td>
				        
				   <h2 ><i><a style="text-decoration: none; border: 2px solid green;"  href="{{action('JobsController@job_detail',$job->id)}}">{{$job->company_name }}</a></i></h2><BR>
                   <p style="font-size: 17px;">Post ::{{$job->job_post }}</p><BR>
                   <p style="font-size: 17px;">Experience ::{{$job->experience }}</p><BR>
                   <a style="text-decoration: none;" href="{{action('JobsController@job_detail',$job->id)}}">Expire Date ::{{$job->ending_date }}</a><BR>

				</td>
			
				
				
				
			</tr>
			@endforeach
		</table>

  
  {{$jobs->links();}}
  
  

      
		
	@else
		<p>No Contacts</p>
	@endif



@stop

