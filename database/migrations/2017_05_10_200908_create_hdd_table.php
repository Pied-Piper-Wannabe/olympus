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
			$table->increments('id');
			$table->decimal('price', 7, 2);
			$table->string('brand');
			$table->string('model');
			$table->integer('size');
			$table->string('interface');
			$table->string('cache');
			$table->integer('rpm');
			$table->string('form_factor');
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
		Schema::drop('hdd');
	}
}
