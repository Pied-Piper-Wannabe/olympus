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
			$table->string('part_id');
			$table->string('name');
			$table->string('brand');
			$table->string('description');
			$table->string('architecture');
			$table->string('max_memory');
			$table->string('kernel');
			$table->string('gui');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('os');
	}
}
