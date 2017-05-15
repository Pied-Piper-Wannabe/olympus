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
			$table->integer('motherboard')->references('id')->on('motherbaord');

			$table->integer('cpu')->nullable();
			$table->integer('gpu')->nullable();
			$table->boolean('sli')->nullable();
			$table->integer('ram')->nullable();
			$table->integer('cpu_cooler')->nullable();
			//-----------------------------------------
			$table->integer('hdd')->nullable();
			$table->integer('psu')->nullable();
			$table->integer('case')->nullable();
			$table->integer('optical_drive')->nullable();
			$table->integer('operating_system')->nullable();
			$table->integer('misc')->nullable();

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
