<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHddTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hdd', function(Blueprint $table){
			$table->string('model');
			$table->string('brand');
			$table->string('series');
			$table->string('interface');
			$table->integer('capacity');
			$table->integer('rpm');
			$table->integer('cache');
			$table->integer('average_latency');
			$table->integer('height');
			$table->integer('width');
			$table->integer('length');
			$table->string('ssd');
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
