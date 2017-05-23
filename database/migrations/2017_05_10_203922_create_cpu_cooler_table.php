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
			$table->increments('id');
			$table->decimal('price', 7, 2);
			$table->string('brand');
			$table->string('model');
			$table->string('sockets');
			$table->string('liquid_cooled');
			$table->string('radiator_size');
			$table->string('noise_level');
			$table->string('fan_rpm');
			$table->string('height');
			$table->string('photo')->nullable();
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
		Schema::drop('cpu_cooler');
	}
}
