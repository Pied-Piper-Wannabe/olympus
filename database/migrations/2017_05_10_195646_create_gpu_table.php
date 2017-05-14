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
			$table->string('model');
			$table->string('brand');
			$table->string('interface');
			$table->string('manufacturer');
			$table->integer('core_clock');
			$table->integer('boost_clock');
			$table->integer('cuda_cores');
			$table->integer('memory_clock');
			$table->integer('memory_size');
			$table->string('memory_interface');
			$table->string('memory_type');
			$table->string('api_3d');
			$table->integer('hdmi');
			$table->string('multi_monitor_support');
			$table->integer('dvi');
			$table->boolean('sli_support');
			$table->string('system_requirements');
			$table->string('power_connector');
			$table->string('dual_link_dvi_support');
			$table->boolean('hdcp_ready');
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
