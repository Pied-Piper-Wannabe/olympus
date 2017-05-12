<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case', function(Blueprint $table){
			$table->string('model');
			$table->string('brand');
			$table->string('type');
			$table->string('series');
			$table->string('case_material');
			$table->string('motherboard_compatability');
			$table->string('side_window');
			$table->string('led');
			$table->string('removable_filter');
			$table->string('external_drive_bay');
			$table->string('internal_drive_bay');
			$table->string('expansion_slots');
			$table->string('front_ports');
			$table->string('cooling_system');
			$table->integer('max_gpu_length');
			$table->integer('dimensions');
			$table->integer('weight');
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
