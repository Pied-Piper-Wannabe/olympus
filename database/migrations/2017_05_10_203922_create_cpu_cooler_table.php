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
			// ------------COMP CHECK---------
			$table->string('sockets');
			//-----------COMP CHECK-----------
			$table->integer('radiator_dimensions');
			$table->integer('fan_size');
			$table->integer('fan_rpm');
			$table->integer('fan_noise');
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
		Schema::drop('cpu_cooler');
	}
}
