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
			$table->integer('part_id');
			$table->string('model');
			$table->string('brand');
			$table->string('interface');
			$table->integer('size');
			$table->integer('rpm')->nullable();
			$table->integer('cache')->nullable();
			$table->integer('average_latency');
			$table->decimal('form_factor', 3, 1);
			$table->boolean('ssd');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('hdd');
	}
}
