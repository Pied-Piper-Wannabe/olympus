<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('psu', function(Blueprint $table){
			$table->increments('id');
			$table->string('model');
			$table->string('type');
			$table->string('max_wattage');
			$table->string('fans');
			$table->string('efficiency');
			$table->string('modular');
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
		Schema::drop('psu');
	}
}
