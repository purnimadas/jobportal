<?php

class PreferredTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$preferreds = array(
             ['user_id'=>'38',  'preferred_district'=>'Dhaka', 'preferred_country'=>'Bangladesh', 'preferred_category'=>'8'],
             ['user_id'=>'40',  'preferred_district'=>'Dhaka', 'preferred_country'=>'Bangladesh', 'preferred_category'=>'9']
            
            
            
		);

		// Uncomment the below to run the seeder
		DB::table('preferred')->insert($preferreds);
		

	}

}
