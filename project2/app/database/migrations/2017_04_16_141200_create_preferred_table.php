<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferredTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preferred', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('job_seeker_id');
			$table->string('preferred_district',250);
			$table->string('preferred_country',250);
			$table->integer('preferred_category');
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
		Schema::drop('preferred');
	}

}
