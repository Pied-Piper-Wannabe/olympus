<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->command->info('Deleting builds records');
		DB::table('builds')->delete();

		$this->command->info('Deleting motherboard records');
		DB::table('motherboard')->delete();

		$this->command->info('Deleting cpu records');
		DB::table('cpu')->delete();

		$this->command->info('Deleting gpu records');
		DB::table('gpu')->delete();

		$this->command->info('Deleting ram records');
		DB::table('ram')->delete();

		$this->command->info('Deleting hdd records');
		DB::table('hdd')->delete();

		$this->command->info('Deleting psu records');
		DB::table('psu')->delete();

		$this->command->info('Deleting case records');
		DB::table('case')->delete();

		$this->command->info('Deleting cpu_cooler records');
		DB::table('cpu_cooler')->delete();

		$this->command->info('Deleting optical_drive records');
		DB::table('optical_drive')->delete();

		$this->command->info('Deleting os records');
		DB::table('os')->delete();

		$this->command->info('Deleting misc records');
		DB::table('misc')->delete();

		$this->command->info('Deleting parts records');
		DB::table('parts')->delete();

		$this->command->info('Deleting users records');
		DB::table('users')->delete();
		

		$this->call('UsersTableSeeder');
		$this->call('MoboTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');
		// $this->call('UserTableSeeder');

		Model::reguard();
	}
}
