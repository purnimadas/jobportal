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
             ['email'=>'w3engineers@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'bangla_phone_limited@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'nascenia@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'dynamic_solution_innovators@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'ssl_wireless@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'rapid_technologies_ltd.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'mcc_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'prime_tech_solutions_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'mpower_social_enterprises_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'adn_eduservices_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'ssg@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'renown_talent_acquisition_agency@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'systems_solutions_development_technologies_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'walton_hi_tech_industries_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'fusion_infotech_limited@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'comillaonlineincome@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'techno_lead_corporation@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'paradise_premier@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'dbl_group@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'a_leading_group_of_companies@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'zuellig_pharma_bangladesh_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'aci_godrej_agrovet_private_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'pran_group@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'bangladesh_specialized_hospital_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'bangladesh_eye_hospital_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'oysterpharmaceuticalsltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'rb_group@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'monno_medical_college_and_hospital@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'gentry_pharmaceuticals_limited@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'eskayef_bangladesh_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'brac_international@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'synesis_it@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'popular_pharmaceuticals_ltd@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'spie_oil_gas_services@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'argon_denims_limited@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             ['email'=>'royalton_lacquer_coating@gmail.com',    'password'=>'1234', 'user_type'=>'employer'],
             



            ['email'=>'Raj@gmail.com',         'password'=>'1234', 'user_type'=>'admin'],
            
            ['email'=>'sathi@gmail.com',       'password'=>'1235', 'user_type'=>'jobseeker'],
            ['email'=>'Ganjendra@gmail.com',   'password'=>'1234', 'user_type'=>'admin'],
            ['email'=>'sakila@gmail.com',      'password'=>'1235', 'user_type'=>'jobseeker'],
            
            ['email'=>'tuni@gmail.com',        'password'=>'1235', 'user_type'=>'jobseeker'],
            ['email'=>'rakesh@gmail.com',      'password'=>'1234', 'user_type'=>'admin'],
            ['email'=>'sejuti@gmail.com',      'password'=>'1235', 'user_type'=>'jobseeker']
		);

		// Uncomment the below to run the seeder
		DB::table('user')->insert($users);

	}

}
