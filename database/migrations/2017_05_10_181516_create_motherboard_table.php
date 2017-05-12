<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotherboardTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('motherboard', function(Blueprint $table){
			$table->string('model');
			$table->string('brand');
			$table->string('manufacturer');
			$table->string('cpu_socket_type');
			$table->string('cpu_type');
			$table->string('supported_cpu_technology');
			$table->string('chipset');
			$table->string('onboard_gpu');
			$table->string('onboard_audio');
			$table->string('onboard_audio');
			$table->integer('memory_slot_number');
			$table->integer('max_memory');
			$table->string('channel_support');
			$table->string('expansion_slots');
			$table->string('storage_devices');
			$table->string('rear_panel_ports');
			$table->string('io_connectors');
			$table->string('form_factor');
			$table->
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
