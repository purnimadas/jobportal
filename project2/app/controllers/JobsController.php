<?php

class JobsController extends BaseController {

public function edu_view(){

		// fetch all row from database
		$educations = Education::all();

		return View::make('jobs.educationv')
						->with('educations', $educations);
	}	

public function user_ref($id){

		// fetch all row from database
		$references=User::find(10);

		return View::make('jobs.user_refv')
						->with('references', $references);
	}
	
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

public function showjob($id){

		// fetch all row from database
		$jobs = Job::where('jobcategory_id', '=', $id )->get();

		 return View::make('jobs.alljob')
            ->with('jobs', $jobs);
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






public function create_s($id)
       {
	   
		$status = Gender::lists('status','id');

		return View::make('jobs.seeker_create')
						->with('status', $status);
	   }

public function store_jobseeker()
	{

		$rules = [
			'name'       =>'required',
			'father'     =>'required',
			'mother'     =>'required',
			'dob'        =>'required|date_format:d-m-Y',
			'nationality'=>'required',
			'national_id'=>'required ',
			'religion'   =>'required ',
			'image'      =>'required'
			
			
			
		];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$jobseeker = new Jobseeker;
			
			$jobseeker->user_id    = Input::get('user_id');
			$jobseeker->name       = Input::get('name');
			$jobseeker->father     = Input::get('father');
			$jobseeker->mother     = Input::get('mother');
			$jobseeker->dob        = Input::get('dob');
			$jobseeker->nationality= Input::get('nationality');
			$jobseeker->national_id= Input::get('national_id');
			$jobseeker->religion   = Input::get('religion');
			$jobseeker->gender_id  = Input::get('status');
			

			$file = array('image' => Input::file('image'));
			
			$destinationPath = 'uploads'; // upload path
            $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111,99999).'.'.$extension; // renameing image
            Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
           Session::flash('success', 'Upload successfully');
           $jobseeker->image = $destinationPath.'/'.$fileName;
           $jobseeker->save();

			return Redirect::action('JobsController@create_education');

		}
		else{

			return Redirect::back()
					->withInput()
					->withErrors($validatotion);

		}
	}

public function create_education(){
		return View::make('jobs.education');
	}

public function store_education()
	{

		$rules = [
			        'exam_title' =>'required',
			        'institution'=>'required',
			        'group'      =>'required',
			        'result'     =>'required',
			        'pass_year'  =>'required|date_format:d-m-Y'
			
			     ];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$education = new Education;

		    $education->user_id    = '1';
			$education->exam_title = Input::get('exam_title');
			$education->institution= Input::get('institution');
			$education->group      = Input::get('group');
			$education->result     = Input::get('result');
			$education->pass_year  = Input::get('pass_year');
			

			
           $education->save();

			return Redirect::action('JobsController@create_preferred');
			}
		else{

			return Redirect::back()
					->withInput()
					->withErrors($validatotion);

		}
	}

public function create_preferred(){
		return View::make('jobs.preferred');
	}

public function store_preferred()
	{

		$rules = [
			        'preferred_district'=>'required',
			        'preferred_country' =>'required',
			        'preferred_category'=>'required'
			        
			
			     ];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$preferred = new Preferred;

		    $preferred->user_id           = '1';
			$preferred->preferred_district= Input::get('preferred_district');
			$preferred->preferred_country = Input::get('preferred_country');
			$preferred->preferred_category= Input::get('preferred_category');
			
			$preferred->save();

			return Redirect::action('JobsController@create_reference');
			}
		else{

			return Redirect::back()
					->withInput()
					->withErrors($validatotion);

		}
	}

public function create_reference(){
		return View::make('jobs.reference');
	}

public function store_reference()
	{

		$rules = [
			        'name'=>'required',
			        'organization' =>'required',
			        'designation'=>'required',
			        'address' =>'required',
			        'mobile'=>'required'
			        
			
			     ];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$reference = new Reference;

		    $reference->user_id      = '1';
			$reference->name         = Input::get('name');
			$reference->organization = Input::get('organization');
			$reference->designation  = Input::get('designation');
			$reference->address      = Input::get('address');
			$reference->mobile       = Input::get('mobile');
			$reference->save();

			return Redirect::action('JobsController@create_reference');
			}
		else{

			return Redirect::back()
					->withInput()
					->withErrors($validatotion);

		}
	}				


public function create_job()
    {
		$categories = Jobcategory::lists('categories','id');

		return View::make('jobs.job_create')
						->with('categories', $categories);
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
			'ending_date'             =>'required |date_format:d-m-Y',
			'image'                   =>'required'
			
			
			
		];

		$validatotion = Validator::make(Input::all(), $rules);


		if ($validatotion->passes()) {
			$job = new Job;
			
			$job->user_id   = '1';
			$job->jobcategory_id          = Input::get('category');
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
            if ($user->user_type=='admin') 
                {
            	return Redirect::action('JobsController@index');
                }
             elseif ($user->user_type=='employeer') 
               {
                return Redirect::action('JobsController@create_job');	
               }
             else     
               
			return Redirect::action('JobsController@create_s',$user->id);
               
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
         	if(Auth::user()->user_type=='admin')
         	    {
	         	return Redirect::action('JobsController@data');

	         	} 
	         	
	         elseif(Auth::user()->user_type=='jobseeker') 
	               {
	         		  return Redirect::action('JobsController@home'); 
	         		}
	         else		
	            return Redirect::action('JobsController@index'); 
      } 
      else {
        // if any error send back with message.
       // echo('Something went wrong'); 
        return Redirect::to('login');
      }
    }

}





}
   
