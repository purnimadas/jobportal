<?php

class JobseekerTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$jobseekers = array(
             ['user_id'=>'38',  'name'=>'Sathi Aktar', 'father'=>'Abdullah Al Hamid', 'mother'=>'Sakhina Aktar',  'dob'=>'20-07-1991',  'nationality'=>'Bangladeshi',  'national_id'=>'81922219917166',  'religion'=>'Muslime',  'gender_id'=>'2','image'=>'uploads/sathi.jpg'],
             ['user_id'=>'40',  'name'=>'Sakila Khatun', 'father'=>'MD Asad', 'mother'=>'Rubya Khatun',  'dob'=>'10-06-1991',  'nationality'=>'Bangladeshi',  'national_id'=>'81922219918566',  'religion'=>'Muslime',  'gender_id'=>'2','image'=>'uploads/sakila.jpg']
            
            
		);

		// Uncomment the below to run the seeder
		DB::table('jobseeker')->insert($jobseekers);
		

	}

}
