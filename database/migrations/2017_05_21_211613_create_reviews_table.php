<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Schema::create('builds', function(Blueprint $table){
		// 	$table->increments('id');

		// 	$table->integer('created_by')->unsigned();
		// 	$table->foreign('created_by')->references('id')->on('users');

		// 	// Figure this one out
		// 	$table->integer('part_id')->unsigned();
		// 	$table->foreign('part_id')->references('id')->on('builds');

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
