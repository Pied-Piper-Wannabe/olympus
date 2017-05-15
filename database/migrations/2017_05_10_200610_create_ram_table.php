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
			//---------COMP CHECK--------------
			$table->integer('size');
			$table->integer('number_of_sticks');
			//-------DDR#--------------
			$table->string('stick_type');
			// -----------------------
			$table->integer('voltage');
			//---------COMP CHECK------------
			$table->string('pin_type');
			$table->integer('speed');
			$table->integer('cas_latency');
			$table->string('timing');
			$table->string('ecc');
			$table->string('registered');
			$table->string('heat_sink');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ram');
	}
}
