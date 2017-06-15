<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobseekersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobseeker', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name',100);
			$table->string('father',100);
			$table->string('mother',100);
			$table->string('dob',200);
			$table->string('nationality',50);
			$table->string('national_id',250);
			$table->string('religion',50);
			$table->integer('gender_id');
			$table->string('image',200);
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobseeker');
	}

}
