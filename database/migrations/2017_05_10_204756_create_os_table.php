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
			$table->increments('id');
			$table->decimal('price', 3, 2);
			$table->string('name');
			$table->integer('architecture');
			$table->integer('max_memory');
			$table->string('kernel');
			$table->string('brand');
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
		Schema::drop('os');
	}
}
