<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompatibilityTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compatibility', function(Blueprint $table){
			$table->string('partname');
			$table->string('socket');
			$table->string('type');
			$table->integer('pci');
			$table->integer('pcie');
			$table->integer('ram_slots');
			$table->string('ram_type');
			$table->integer('max_ram');
			$table->integer('power_requirement');
			$table->decimal('price', 5, 2);
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
