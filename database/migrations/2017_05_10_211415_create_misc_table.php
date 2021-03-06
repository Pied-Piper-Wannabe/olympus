<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMiscTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('misc', function(Blueprint $table){
			$table->increments('id');
			$table->decimal('price', 7, 2);
			$table->string('model');
			$table->string('type');
			$table->string('description');
			$table->string('specs');
			$table->string('brand');
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
		Schema::drop('misc');
	}
}
