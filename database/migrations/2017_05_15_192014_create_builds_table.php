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
			$table->string('name', 150)->nullable();

			$table->integer('created_by')->unsigned();
			$table->foreign('created_by')->references('id')->on('users');

			$table->text('description')->nullable();
			$table->decimal('price', 7, 2);
			//------needs a compatibility check-------

			$table->integer('motherboard')->nullable()->unsigned();
			$table->foreign('motherboard')->references('id')->on('motherboard');

			$table->integer('cpu')->nullable()->unsigned();
			$table->foreign('cpu')->references('id')->on('cpu');

			$table->integer('gpu')->nullable()->unsigned();
			$table->foreign('gpu')->references('id')->on('gpu');

			$table->integer('ram')->nullable()->unsigned();
			$table->foreign('ram')->references('id')->on('ram');

			$table->integer('cpu_cooler')->nullable()->unsigned();
			$table->foreign('cpu_cooler')->references('id')->on('cpu_cooler');

			//-----------------------------------------
			$table->integer('hdd')->nullable()->unsigned();
			$table->foreign('hdd')->references('id')->on('hdd');

			$table->integer('psu')->nullable()->unsigned();
			$table->foreign('psu')->references('id')->on('psu');

			$table->integer('case')->nullable()->unsigned();
			$table->foreign('case')->references('id')->on('case');

			$table->integer('operating_system')->nullable()->unsigned();
			$table->foreign('operating_system')->references('id')->on('os');

			$table->integer('misc')->nullable()->unsigned();
			$table->foreign('misc')->references('id')->on('misc');

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
		Schema::drop('builds');
	}
}
