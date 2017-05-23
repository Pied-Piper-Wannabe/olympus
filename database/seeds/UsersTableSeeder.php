<?php

//test comment please ignore

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = new \App\User();
		$user->name = 'user';
		$user->email = 'user@gmail.com';
		$user->password = Hash::make('password');
		$user->photo = '01.jpg';
		$user->save();

		$user1 = new \App\User();
		$user1->name = 'testUser';
		$user1->email = 'testUser@gmail.com';
		$user1->password = Hash::make('password');
		$user1->photo = '02.jpg';
		$user1->save();

		$user2 = new \App\User();
		$user2->name = 'pcmasterrace';
		$user2->email = 'pcmasterrace@gmail.com';
		$user2->password = Hash::make('password');
		$user2->photo = '03.png';
		$user2->save();

		$user3 = new \App\User();
		$user3->name = 'demo';
		$user3->email = 'demo@gmail.com';
		$user3->password = Hash::make('demo');
		$user3->photo = '02.png';
		$user3->save();
	}
}


