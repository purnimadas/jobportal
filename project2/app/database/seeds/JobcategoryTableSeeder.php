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
             ['categories'=>'Accounting/Finance'],
             ['categories'=>'Bank/Non-Bank Fin.Instution'],
             ['categories'=>'Education/Trainning'],
             ['categories'=>'Engineer/Architects'],
             ['categories'=>'Research/Consultancy'],
             ['categories'=>'Customer Support/Call Certre'],

             ['categories'=>'Security/Support Service'],
             ['categories'=>'IT/Telecommunication'],
             ['categories'=>'Medical/Pharma']
		);

		// Uncomment the below to run the seeder
		DB::table('jobcategory')->insert($jobcategories);
		//Jobcategory::create(array('categories'=>'IT/Telecommunication'));

	}

}
