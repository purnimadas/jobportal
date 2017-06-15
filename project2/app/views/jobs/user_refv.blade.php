@extends('layout.master1')

@section('content')
<p></p>
	

   @foreach ($user->references as $reference)

  <h2>{{$reference->name }} 
  <h2> {{$reference->organization }}</h2>
   
   @endforeach
  

		
@stop