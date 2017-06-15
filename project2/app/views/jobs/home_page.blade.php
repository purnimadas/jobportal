@extends('layout.master')

@section('content')
	

<div class="search">
	
			<form action="#">
				<img src="images/title.gif" alt="" width="90" height="30" />
				<input type="text" class="first input" value="Enter keywords" /> <input type="text" class="second input" value="Enter Locations (country, city, zip code)" />
				<a href="#" class="button">Search</a>
				<div class="line">
					<input type="checkbox" class="check" /> <span class="exept">Search Title Only</span>
					<div class="links">
						<a href="#">US Job Search</a> | <a href="#">More Search Options</a>
					</div>
				</div>
			</form>
		</div>
		<div id="blocks">																																																																																																																													
			<div class="block">
				<img src="images/title1.gif" alt="" width="214" height="29" /><br />
				<img src="images/map.jpg" alt="" width="214" height="160" /><br />
				<a href="#" class="more"><img src="images/morey.jpg" alt="" width="105" height="27" /></a>
			</div>
			<div class="block">
				<img src="images/title2.gif" alt="" width="214" height="29" /><br />
				<p class="red_text">Maecenas hendrerit, massa ac laoreet iaculipede mnisl ullamcorper- massa, cosectetuer feipsum eget pede. Proin nunc. Donec nonummy, tellus er sodales enim, in tincidun- mauris in odio. Massa ac laoreet iaculipede nisl ullamcorpermassa, ac consectetuer feipsum eget pede.  Proin nunc. Donec massa.</p>
				<a href="#" class="more"><img src="images/morer.jpg" alt="" width="105" height="27" /></a>
			</div>
			<div class="block">
				<img src="images/title3.gif" alt="" width="214" height="29" /><br />
				  
          
				<ul id="list">

				@if(count($jobcategories))
                     @foreach ($jobcategories as $jobcategory)
					<li><a href="{{action('JobsController@showjob',$jobcategory->id)}}">{{$jobcategory->categories }}</a></li>
				@endforeach
                     @endif 
				</ul>

			 

				
				<a href="#" class="more"><img src="images/moreg.jpg" alt="" width="106" height="27" /></a>
			</div>
			<div class="block">
				<img src="images/title4.gif" alt="" width="214" height="29" /><br />
				<p class="gray_text">Maecenas hendrerit, massa ac laoreet iaculipede mnisl ullamcorper- massa, cosectetuer feipsum eget pede. Proin nunc. Donec nonummy, tellus er sodales enim, in tincidun- mauris in odio. </p>
				<form action="#">
					<input type="text" class="signup input" value="Your E-mail Address" />
					<a href="#" class="submit"><img src="images/submit.jpg" alt="" width="69" height="25" /></a>
				</form>
			</div>
		</div>
		<div id="info">
			<div>
				<img src="images/title5.gif" alt="" width="160" height="26" />
				<ul>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Massa ac laoreet iaculipede</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
				</ul>
			</div>
			<div>
				<img src="images/title6.gif" alt="" width="160" height="26" />
				<ul>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Massa ac laoreet iaculipede</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
				</ul>
			</div>
			<div>
				<img src="images/title7.gif" alt="" width="160" height="26" />
				<ul>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Massa ac laoreet iaculipede</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
				</ul>
			</div>
			<div>
				<img src="images/title8.gif" alt="" width="160" height="26" />
				<ul>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Massa ac laoreet iaculipede</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
					<li><a href="#">Maecenas hendrerit</a></li>
					<li><a href="#">Convallis nonummy tellus</a></li>
					<li><a href="#">In tincidunt mauris</a></li>
				</ul>
			</div>
		</div>
		
@stop