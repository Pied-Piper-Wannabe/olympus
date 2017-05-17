<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGpuTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gpu', function(Blueprint $table){
			$table->increments('id');
			$table->decimal('price', 5, 2);
			$table->string('brand');
			$table->string('model');
			$table->string('interface');
			$table->string('chipset');
			$table->integer('mem_size');
			$table->string('mem_type');
			$table->decimal('core_clock', 4, 2);
			$table->decimal('boost_clock', 4, 2);
			$table->integer('tdp');
			$table->string('fan');
			$table->string('sli_support');
			$table->string('crossfire_support');
			$table->integer('length');
			$table->string('gsync');
			$table->string('freesync');
			$table->integer('dvi_d');
			$table->integer('display_port');
			$table->integer('hdmi');
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
		Schema::drop('gpu');
	}
}
