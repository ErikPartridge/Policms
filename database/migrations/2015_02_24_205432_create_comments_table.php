<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			//No more than 16kB
			$table->text('content');
			$table->integer('user')->unsigned();
			$table->foreign('user')->references('id')->on('users');
			$table->integer('post')->unsigned();
			$table->foreign('post')->references('id')->on('posts');
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
		Schema::drop('comments');
	}

}