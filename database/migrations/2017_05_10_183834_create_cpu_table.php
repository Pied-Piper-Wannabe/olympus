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
			$table->string('name');
			$table->string('brand');
			$table->string('series');
			$table->string('socket_type');
			$table->string('core_name');
			$table->integer('number_of_cores');
			$table->integer('number_of_threads');
			$table->integer('operating_frequency');
			$table->integer('max_turbo_frequency');
			$table->string('l2_cash');
			$table->string('l3_cash');
			$table->string('bit_support');
			$table->string('hyperthreading_support');
			$table->string('virtualization_support');
			$table->string('intergrated_graphics');
			$table->integer('graphics_base_frequency');
			$table->integer('max_dynamic_frequency');
			$table->string('pci_revision');
			$table->string('pci_lanes');
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
