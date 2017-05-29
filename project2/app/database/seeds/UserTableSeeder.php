<?php

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$users = array(
            ['email' =>'Raj@gmail.com',         'password'=>'123'   'user_type' =>'admin'],
            ['email' =>'bdbangla@gmail.com',    'password'=>'1234'   'user_type' =>'company'],
            ['email' =>'sathi@gmail.com',       'password'=>'1235'   'user_type' =>'jobseeker']
		);

		// Uncomment the below to run the seeder
		DB::table('user')->insert($users);

	}

}
