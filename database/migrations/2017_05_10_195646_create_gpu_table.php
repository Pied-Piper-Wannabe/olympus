<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gpu', function(Blueprint $table){
			$table->integer('part_id');
			$table->string('model');
			$table->string('brand');
			// --------------COMP CHECK--------
			$table->string('interface');
			$table->integer('wattage');
			// -----------COMP CHECK--------
			$table->integer('core_clock');
			$table->integer('boost_clock');
			$table->integer('cores');
			$table->boolean('cuda_support');
			$table->integer('memory_clock');
			$table->integer('memory_size');
			$table->string('memory_type');
			$table->string('api_3d');
			$table->integer('hdmi');
			$table->integer('dvi');
			$table->boolean('sli_support');
			$table->boolean('crossfire_support');
			$table->boolean('gsync');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gpu');
	}
}
