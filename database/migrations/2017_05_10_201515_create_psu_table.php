<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psu', function(Blueprint $table){
			$table->string('model');
			$table->string('type');
			$table->string('short_p_n');
			$table->string('output_capacity');
			$table->integer('dimensions');
			$table->string('power_factor_correction');
			$table->string('power_good_signal'):
			$table->string('hold_up_time');
			$table->integer('input_current');
			$table->integer('input_frequency_range');
			$table->integer('input_voltage');
			$table->integer('operating_temp');
			$table->integer('operating_humidity');
			$table->string('cooling_system');
			$table->string('connector');
			$table->string('efficiency');
			$table->string('modular');
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
