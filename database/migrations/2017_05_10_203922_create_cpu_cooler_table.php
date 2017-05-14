<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpuCoolerTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpu_cooler', function(Blueprint $table){
			$table->string('model');
			$table->string('brand');
			$table->string('type');
			$table->string('block_compatibility');
			$table->string('block_material');
			$table->integer('radiator_dimensions');
			$table->string('radiator_material');
			$table->integer('fan_size');
			$table->integer('fan_dimensions');
			$table->integer('fan_rpm');
			$table->integer('fan_air_flow');
			$table->integer('fan_noise');
			$table->string('tube_material');
			$table->integer('number_of_fans');
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
