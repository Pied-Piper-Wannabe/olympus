<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRamTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ram', function(Blueprint $table){
			$table->increments('id');
			$table->decimal('price', 7, 2);
			$table->string('brand');
			$table->string('model');
			$table->string('memory_slot_type');
			$table->integer('speed');
			$table->string('type');
			$table->integer('size');
			$table->integer('number_of_sticks');
			$table->integer('stick_size');
			$table->integer('CASlatency');
			$table->decimal('voltage', 5, 2);
			$table->string('heat_sink');
			$table->string('ECC');
			$table->string('registered');
			$table->string('color');
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
		Schema::drop('ram');
	}
}
