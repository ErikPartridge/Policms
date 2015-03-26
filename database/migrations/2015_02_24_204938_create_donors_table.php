<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('donors', function($table){
			$table->increments('id');
			$table->string('first');
			$table->string('middle');
			$table->string('last');
			$table->string('email');
			$table->string('employer');
			$table->string('job');
			$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('phone');
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
		Schema::drop('donors');
	}

}
