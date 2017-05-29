<?php

class JobsController extends BaseController {

	
public function index(){

		// fetch all row from database
		$jobs = Job::all();

		return View::make('jobs.index')
						->with('jobs', $jobs);
	}


public function job_category(){

		// fetch all row from database
		
	}	




public function home(){

		// fetch all row from database
		$jobcategories = Jobcategory::all();

		return View::make('jobs.home_page')
						->with('jobcategories', $jobcategories);
	}


public function all_job($id){

		// fetch all row from database
		$jobs = Jobcategory::find($id)->job;

		return View::make('jobs.all_job_page')
						->with('jobs', $jobs);
	}


public function job_detail($id){

		// fetch all row from database
		$job = Job::find($id);

		return View::make('jobs.job_details')
						->with('job', $job);
	}



public function create_job(){
		$categories = Jobcategory::lists('categories','id');

		return View::make('jobs.job_create')
						->with('categories', $categories);
}


public function create_s(){
	   $jobcategory = new Jobcategory;
		return View::make('jobs.seeker_create');
	}	

public function store_job()
	{

		$rules = [
			'company_name'            =>'required',
			'job_post'                =>'required',
			'job_description'         =>'required',
			'job_nature'              =>'required',
			'educational_requirements'=>'required',
			'starting_date'           =>'required |date_format:d-m-Y',
			'ending_date'             =>'required |date_format:d-m-Y'
			
			
			
		];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$job = new Job;
			
			$job->user_id   = '1';
			$job->company_name            = Input::get('company_name');
			$job->job_post                = Input::get('job_post');
			$job->job_description         = Input::get('job_description');
			$job->job_nature              = Input::get('job_nature');
			$job->educational_requirements= Input::get('educational_requirements');
			$job->experience              = Input::get('experience');
			$job->job_location            = Input::get('job_location');
			$job->salary_range            = Input::get('salary_range');
			$job->starting_date           = Input::get('starting_date');
			$job->ending_date             = Input::get('ending_date');


			$file = array('image' => Input::file('image'));
			
			$destinationPath = 'uploads'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
           Session::flash('success', 'Upload successfully');
           $job->image = $destinationPath.'/'.$fileName; 
			

          

			$job->save();

			return Redirect::action('JobsController@index');

		}
		else{

			return Redirect::back()
					->withInput()
					->withErrors($validatotion);

		}
	}




	public function create_user(){
		return View::make('jobs.user_create');
	}


	public function store_user()
	{

		$rules = [
			'email'     =>'Required|Between:3,64|Email',
			'password'  =>'Required|AlphaNum|Between:4,8',
			'user_type' =>'required'
			
		];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$user = new User;

			$user->email    = Input::get('email');
			$user->password = Hash::make(  Input::get('password') );
			$user->user_type= Input::get('user_type');
			
			
            $user->save();

			return Redirect::action('JobsController@index');

		}
		else{

			return Redirect::back()
					->withInput()
					->withErrors($validatotion);

		}
	}


	public function data(){
		$users = User::all();

		return View::make('jobs.data')
						->with('users', $users);
	}


	public function logout(){
		
		return Redirect::action('JobsController@login');
	}

	public function login() 
   { 
    // Getting all post data
    return View::make('jobs.login');
   
    
  }


public function doLogin()
{
	//print_r(Input::all());

$rules = array(
		    'email'     =>'Required|Between:3,64|Email',
			'password'  =>'Required|AlphaNum|Between:4,8'
	     );
    $validator = Validator::make(Input::all(), $rules);
    if ($validator->fails()){
      // If validation falis redirect back to login.
      return Redirect::to('login')
                       ->withErrors($validator)
                       ->withInput(input::except('password'));
    }
    else {
      $userdata = array(
		    'email' => Input::get('email'),
		    'password' => Input::get('password')
		  );
      // doing login.
     // if (Auth::validate($userdata)) {
        if (Auth::attempt($userdata)) {
         // echo "string";
         	if(Auth::user()->user_type=='admin'){
	         	return Redirect::action('JobsController@data');

	         	} 
	         	
	         elseif (Auth::user()->user_type=='jobseeker') {
	         		  return Redirect::action('JobsController@home'); 
	         		}
	       
       // }
      } 
      else {
        // if any error send back with message.
       // echo('Something went wrong'); 
        return Redirect::to('login');
      }
    }

}





}
   
