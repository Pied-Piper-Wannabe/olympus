<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpvotesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upvotes', function(Blueprint $table){
			$table->increments('id');

			$table->integer('upvotes');

		 	$table->integer('build')->unsigned();
		 	$table->foreign('build')->references('id')->on('builds');

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
		Schema::drop('upvotes');
	}
}
