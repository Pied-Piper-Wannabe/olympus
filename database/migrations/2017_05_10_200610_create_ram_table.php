<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ram', function(Blueprint $table){
			$table->string('model');
			$table->string('brand');
			$table->string('series');
			$table->integer('capacity');
			$table->string('type');
			$table->integer('speed');
			$table->string('cas_latency');
			$table->string('timing');
			$table->integer('voltage');
			$table->string('ecc');
			$table->string('buffered_registered');
			$table->string('multi_channel_kit');
			$table->string('heat_spreader');
			$table->string('fan_included');
			$table->integer('number_of_sticks');
		});
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
