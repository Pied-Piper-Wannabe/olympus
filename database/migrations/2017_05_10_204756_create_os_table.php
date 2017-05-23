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
			$table->decimal('price', 5, 2);
			$table->string('model');
			$table->string('architecture');
			$table->integer('max_supported_memory');
			$table->string('kernel');
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
		Schema::drop('os');
	}
}
