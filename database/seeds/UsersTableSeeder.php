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
        $user->name = 'user'
        $user->email = 'user@gmail.com'
        $user->password = Hash::make('password');
        $user->save();

        $user1 = new \App\User();
        $user1->name = 'testUser'
        $user1->email = 'testUser@gmail.com'
        $user1->password = Hash::make('password');
        $user1->save();
    }
}


