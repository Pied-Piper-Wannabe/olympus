<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllvotesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('all_votes', function(Blueprint $table){
			$table->increments('id');

		 	$table->integer('user_id')->unsigned();
		 	$table->foreign('user_id')->references('id')->on('users');

		 	$table->integer('build_id')->unsigned();
		 	$table->foreign('build_id')->references('id')->on('builds');

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
		Schema::drop('all_votes');
	}
}
