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
			$table->increments('id');
			$table->decimal('price', 7, 2);
			$table->string('brand');
			$table->string('model');
			$table->string('form_factor');
			$table->string('cpu_socket');
			$table->string('chipset');
			$table->integer('memory_slots');
			$table->string('memory_pin');
			$table->string('memory_type');
			$table->integer('max_memory');
			$table->string('raid_support');
			$table->string('onboard_gpu');
			$table->string('crossfire_support');
			$table->string('sli_support');
			$table->integer('sata6_gbs');
			$table->string('sata_express');
			$table->string('onboard_ethernet');
			$table->string('onboard_usb3');
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
		Schema::drop('motherboard');
	}
}
