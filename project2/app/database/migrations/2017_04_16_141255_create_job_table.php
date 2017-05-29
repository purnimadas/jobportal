<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user_id',250);
			$table->string('jobcategory_id',250);
			$table->string('company_name',200);
			$table->string('job_post',100);
			$table->string('job_description',1000);
			$table->string('job_nature',50);
			$table->string('educational_requirements',250);
			$table->string('experience',50);
			$table->string('job_location',250);
			$table->string('salary_range',250);
			$table->string('starting_date',250);
			$table->string('ending_date',250);
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
		Schema::drop('job');
	}

}
