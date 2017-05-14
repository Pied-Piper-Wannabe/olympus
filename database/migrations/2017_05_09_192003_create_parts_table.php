<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('parts', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 150);
			$table->text('specs');
			$table->decimal('price', 5, 2);
			$table->string('photo');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('parts');
	}
}
