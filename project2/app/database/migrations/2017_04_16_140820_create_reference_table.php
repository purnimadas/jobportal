<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reference', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('name',100);
			$table->string('organization',250);
			$table->string('designation',200);
			$table->string('address',400);
			$table->string('mobile',250);
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
		Schema::drop('reference');
	}

}
