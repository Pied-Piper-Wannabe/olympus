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

			$table->integer('user_id')->unsigned();
			$table->integer('user_id')->references('id')->on('users');

			$table->text('description');
			$table->decimal('price', 5, 2);
			//------needs a compatibility check-------

			$table->integer('motherboard')->unsigned();
			$table->integer('motherboard')->references('part_id')->on('motherbaord');

			$table->integer('cpu')->unsigned();
			$table->integer('cpu')->references('part_id')->on('cpu');

			$table->integer('gpu')->unsigned();
			$table->integer('gpu')->references('part_id')->on('gpu');

			$table->boolean('sli');

			$table->integer('ram')->unsigned();
			$table->integer('ram')->references('part_id')->on('ram');

			$table->integer('cpu_cooler')->unsigned();
			$table->integer('cpu_cooler')->references('part_id')->on('cpu_cooler');

			//-----------------------------------------
			$table->integer('hdd')->unsigned();
			$table->integer('hdd')->references('part_id')->on('hdd');

			$table->integer('psu')->unsigned();
			$table->integer('psu')->references('part_id')->on('psu');

			$table->integer('case')->unsigned();
			$table->integer('case')->references('part_id')->on('case');

			$table->integer('optical_drive')->unsigned();
			$table->integer('optical_drive')->references('part_id')->on('optical_drive');

			$table->integer('operating_system')->unsigned();
			$table->integer('operating_system')->references('part_id')->on('os');

			$table->integer('misc')->unsigned();
			$table->integer('misc')->references('part_id')->on('misc');

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
