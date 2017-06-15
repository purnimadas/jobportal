<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JOB Portal</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!--<link rel="stylesheet" type="text/css" href="style1.css" />-->
{{HTML::style('style.css')}}
{{HTML::style('table.css')}}


</head>

<body>
	<div class="meta">																																																																																																																					<div class="inner_copy"><a href="http://ecommercebuilders.blogspot.com/2015/10/best-free-ecommerce-website-builders.html">http://ecommercebuilders.blogspot.com/2015/10/best-free-ecommerce-website-builders.html</a></div>
		<div class="metalinks">
			<a href="#"><img src="images/meta1.gif" alt="" width="15" height="14" /></a>
			<a href="#"><img src="images/meta2.gif" alt="" width="17" height="14" /></a>
			<a href="#"><img src="images/meta3.gif" alt="" width="17" height="14" /></a>
			<a href="#"><img src="images/meta4.gif" alt="" width="15" height="14" /></a>
		</div>
		<p>Recruiters: <a href="{{action('JobsController@login')}}">Log in</a> or <a href="#">Find out more</a></p>																																															
	</div>
	<div id="header">
		<a href="index.html" class="logo"><img src="images/logo.jpg" alt="setalpm" width="149" height="28" /></a>                                                                                                                                                                                                                                      
		<span class="slogan">Your Key to Success</span>
		<ul id="menu">
			<li><a href="{{action('JobsController@home')}}">Home</a></li>
			<li><a href="#">Employer</a></li>
			<li><a href="#">Our Career</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Help</a></li>
			<li class="last">

				<select onChange="window.location.href=this.value" id="register" name="register">
                   <option value="">Register</option></a>
                   <option value="{{action('JobsController@create_user')}}">Job Seeker</option>
                   <option value="{{action('JobsController@create_user')}}">Employeer</option>
                   <option value="{{action('JobsController@create_user')}}">Admin</option>
                </select>
			</li>
		</ul>
		<img src="images/bigpicture.jpg" alt="" width="892" height="303" />
		
	</div>
	<div id="content">	
		@yield('content')
	</div>	
	
	
	<div id="footer">																																																																																																																							<div class="inner_copy"><a href="https://www.engadget.com/2015/12/04/top-10-website-builders-for-small-business/">top 10 website builders for small business</a></div>
		Copyright &copy;. All rights reserved. Design by <a href="http://www.bestfreetemplates.info" target="_blank" title="Free CSS templates">BFT</a> 																																																						 
	</div>

	  

    <!-- Bootstrap Core JavaScript -->
    
</body>
</html>
