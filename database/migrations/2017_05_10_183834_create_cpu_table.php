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
			$table->integer('part_id');
			$table->string('model');
			$table->string('brand');
			$table->string('socket_type');
			$table->integer('number_of_cores');
			$table->integer('number_of_threads');
			$table->boolean('hyperthreading_support');
			$table->integer('operating_frequency');
			$table->integer('max_turbo_frequency');
			$table->string('l1_cache')
			$table->string('l2_cache');
			$table->string('l3_cache');
			$table->string('data_width');
			$table->string('intergrated_graphics');
			$table->integer('wattage');
			$table->integer('max_supported_memory');
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
