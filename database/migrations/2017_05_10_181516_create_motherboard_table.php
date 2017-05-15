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
			$table->integer('part_id');
			$table->string('model');
			$table->string('brand');
			$table->string('manufacturer');
			$table->string('cpu_socket');
			$table->string('cpu_type');
			$table->string('chipset');
			$table->string('onboard_gpu');
			$table->string('onboard_audio');
			$table->integer('memory_slot_number');
			$table->integer('max_memory');
			$table->string('supported_memory');
			$table->string('expansion_slots');
			//-----sata-------
			$table->string('storage_devices');
			// --------------
			$table->string('rear_panel_ports');
			$table->string('ethernet');
			$table->string('form_factor');
			$table->string('raid_support');
			$table->string('crossfire_support');
			$table->string('sli_support');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('motherboard');
	}
}
