<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('os', function(Blueprint $table){
			$table->string('name');
			$table->string('description');
			$table->string('architecture');
			$table->string('system_requirements');
			$table->string('kernel');
			$table->string('gui');
			$table->string('manufacturer');
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
