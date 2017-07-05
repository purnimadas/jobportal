<?php

class EducationTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$educations = array(
             ['user_id'=>'38',  'exam_title'=>'SSC', 'institution'=>'Rajshahi B B Hindu Academy', 'group'=>'Science',  'result'=>'5.00',  'pass_year'=>'2006'],
             ['user_id'=>'38',  'exam_title'=>'HSC', 'institution'=>'Rajshahi Govt City College', 'group'=>'Science',  'result'=>'4.90',  'pass_year'=>'2008'],
             ['user_id'=>'38',  'exam_title'=>'B.Sc', 'institution'=>'Rajshahi University', 'group'=>'CSE',  'result'=>'3.33',  'pass_year'=>'2015'],
             ['user_id'=>'40',  'exam_title'=>'SSC', 'institution'=>'PN Girls School,Rajshahi', 'group'=>'Science',  'result'=>'4.88',  'pass_year'=>'2007'],
             ['user_id'=>'40',  'exam_title'=>'HSC', 'institution'=>'New Govt College, Rajshahi', 'group'=>'Science',  'result'=>'4.80',  'pass_year'=>'2009'],
             ['user_id'=>'40',  'exam_title'=>'B.Sc', 'institution'=>'Dhaka University', 'group'=>'Pharmecy',  'result'=>'3.00',  'pass_year'=>'2016'],
            
            
            
		);

		// Uncomment the below to run the seeder
		DB::table('education')->insert($educations);
		

	}

}
