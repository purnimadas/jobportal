<?php

class JobcategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');

		$jobcategories = array(
             ['categories'=>'Education/Trainning'],
             ['categories'=>'Engineering/Architecture'],
             ['categories'=>'It/Telecommunication'],
             ['categories'=>'Medical']
		);

		// Uncomment the below to run the seeder
		DB::table('jobcategory')->insert($jobcategories);
		//Jobcategory::create(array('categories'=>'IT/Telecommunication'));

	}

}
