<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpticalDriveTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('optical_drive', function(Blueprint $table){
			$table->string('part_id');
			$table->string('model');
			$table->string('brand');
			$table->string('type');
			$table->integer('cache');
			$table->string('dvd_r');
			$table->string('dvd_rw');
			$table->string('cd_r');
			$table->string('cd_rw');
			$table->string('dvd_r_dl');
			$table->integer('dvd_read_speed');
			$table->integer('cd_read_speed');
			$table->string('interface');
			$table->string('blue_ray');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('optical_drive');
	}
}
