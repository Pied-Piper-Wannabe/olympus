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

			$table->integer('created_by')->unsigned();
			$table->foreign('created_by')->references('id')->on('users');

			$table->text('description');
			$table->decimal('price', 5, 2);
			//------needs a compatibility check-------

			$table->integer('motherboard')->unsigned();
			$table->foreign('motherboard')->references('id')->on('motherboard');

			$table->integer('cpu')->unsigned();
			$table->foreign('cpu')->references('id')->on('cpu');

			$table->integer('gpu')->unsigned();
			$table->foreign('gpu')->references('id')->on('gpu');

			$table->boolean('sli');

			$table->integer('ram')->unsigned();
			$table->foreign('ram')->references('id')->on('ram');

			$table->integer('cpu_cooler')->unsigned();
			$table->foreign('cpu_cooler')->references('id')->on('cpu_cooler');

			//-----------------------------------------
			$table->integer('hdd')->unsigned();
			$table->foreign('hdd')->references('id')->on('hdd');

			$table->integer('psu')->unsigned();
			$table->foreign('psu')->references('id')->on('psu');

			$table->integer('case')->unsigned();
			$table->foreign('case')->references('id')->on('case');

			$table->integer('optical_drive')->unsigned();
			$table->foreign('optical_drive')->references('id')->on('optical_drive');

			$table->integer('operating_system')->unsigned();
			$table->foreign('operating_system')->references('id')->on('os');

			$table->integer('misc')->unsigned();
			$table->foreign('misc')->references('id')->on('misc');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('builds');
	}
}