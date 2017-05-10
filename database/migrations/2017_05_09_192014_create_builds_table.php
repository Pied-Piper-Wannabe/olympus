<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('builds', function(Blueprint $table){
			$table->increments('id');
			$table->string('name', 150);
			$table->integer('user_id');
			$table->text('description');
			$table->decimal('price', 5, 2);
			//------needs a compatibility check-------
			$table->integer('motherboard');
			$table->integer('cpu');
			$table->string('gpu');
			$table->boolean('sli');
			$table->integer('ram');
			$table->integer('cpu_cooler');
			//-----------------------------------------
			$table->string('hdd');
			$table->integer('psu');
			$table->integer('case');
			$table->integer('optical_drive');
			$table->integer('operating_system');
			$table->string('misc');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
