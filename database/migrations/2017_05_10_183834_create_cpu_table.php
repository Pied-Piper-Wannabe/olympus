<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCpuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cpu', function(Blueprint $table){
			$table->increments('id');
			$table->decimal('price', 7, 2);
			$table->string('brand');
			$table->string('model');
			$table->string('data_width');
			$table->string('socket_type');
			$table->decimal('operating_frequency', 3, 2);
			$table->integer('max_turbo_frequency');
			$table->integer('number_of_cores');
			$table->string('l1_cache');
			$table->string('l2_cache');
			$table->string('l3_cache');
			$table->integer('wattage');
			$table->boolean('hyperthreading_support');
			$table->integer('max_supported_memory');
			$table->string('intergrated_graphics');
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
		Schema::drop('cpu');
	}
}
