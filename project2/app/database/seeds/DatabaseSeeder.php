<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('GenderTableSeeder');
		$this->call('JobcategoryTableSeeder');
		$this->call('JobseekerTableSeeder');
		$this->call('PreferredTableSeeder');
		$this->call('ReferenceTableSeeder');
		$this->call('EducationTableSeeder');
		
		$this->call('JobTableSeeder');
		//$this->command->info('category table seeded!');

	}

}
