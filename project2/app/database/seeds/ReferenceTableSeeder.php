<?php

class ReferenceTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$references = array(
             ['user_id'=>'38',  'name'=>'Dr. Shanur Zaman', 'organization'=>'Rajshahi University', 'designation'=>'Professor', 'address'=>'Kajla,Rajshahi', 'mobile'=>'01754345789'],
             ['user_id'=>'38',  'name'=>'Most. Sabina Rahman', 'organization'=>'Rajshahi University', 'designation'=>'Assistent Professor', 'address'=>'Kajla, Rajshahi', 'mobile'=>'01743265786'],
             ['user_id'=>'40',  'name'=>'Dr. SK Das', 'organization'=>'Dhaka University', 'designation'=>'Professor', 'address'=>'Dhanmondi, Dhaka', 'mobile'=>'017654356787'],
            
            ['user_id'=>'40',  'name'=>'Rafiqul Islam', 'organization'=>'Dhaka University', 'designation'=>'Assistent Professor', 'address'=>'Baridhara,Dhaka', 'mobile'=>'01743256754']
            
            
            
		);

		// Uncomment the below to run the seeder
		DB::table('reference')->insert($references);
		

	}

}
