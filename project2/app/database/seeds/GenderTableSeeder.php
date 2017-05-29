<?php

class GenderTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$genders = array(
             ['status'=>'Male'],
             ['status'=>'Female'],
             
             ['status'=>'Both']
		);

		// Uncomment the below to run the seeder
		DB::table('gender')->insert($genders);

	}

}
