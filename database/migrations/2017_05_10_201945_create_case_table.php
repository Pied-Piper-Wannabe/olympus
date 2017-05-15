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
			$table->string('part_id');
			$table->string('model');
			$table->string('brand');
			$table->string('external_drive_bay');
			$table->string('internal_drive_bay');
			$table->string('front_ports');
			// ----------COMP CHECK------------	
			$table->string('form_factor');
			$table->integer('max_gpu_length');
			// ------------COMP CHECK------------
			$table->integer('dimensions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('case');
	}
}
