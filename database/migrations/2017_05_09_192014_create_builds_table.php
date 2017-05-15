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

			$table->text('description')->nullable();;
			$table->decimal('price', 5, 2);
			//------needs a compatibility check-------

			$table->integer('motherboard')->nullable()->unsigned();
			$table->integer('motherboard')->references('part_id')->on('motherbaord');

			$table->integer('cpu')->nullable()->unsigned();
			$table->integer('cpu')->references('part_id')->on('cpu');

			$table->integer('gpu')->nullable()->unsigned();
			$table->integer('gpu')->references('part_id')->on('gpu');

			$table->boolean('sli');

			$table->integer('ram')->nullable()->unsigned();
			$table->integer('ram')->references('part_id')->on('ram');

			$table->integer('cpu_cooler')->nullable()->unsigned();
			$table->integer('cpu_cooler')->references('part_id')->on('cpu_cooler');

			//-----------------------------------------
			$table->integer('hdd')->nullable()->unsigned();
			$table->integer('hdd')->references('part_id')->on('hdd');

			$table->integer('psu')->nullable()->unsigned();
			$table->integer('psu')->references('part_id')->on('psu');

			$table->integer('case')->nullable()->unsigned();
			$table->integer('case')->references('part_id')->on('case');

			$table->integer('optical_drive')->nullable()->unsigned();
			$table->integer('optical_drive')->references('part_id')->on('optical_drive');

			$table->integer('operating_system')->nullable()->unsigned();
			$table->integer('operating_system')->references('part_id')->on('operating_system');

			$table->string('misc')->nullable()->unsigned();
			$table->string('misc')->references('part_id')->on('misc');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		schema::drop('builds');
	}
}
