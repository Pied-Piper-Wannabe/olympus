<?php

//test comment please ignore

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CpuTableSeeder extends Seeder
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

        $user = new \App\User();
        $user->name = 'testUser'
        $user->email = 'testUser@gmail.com'
        $user->password = Hash::make('password');
        $user->save();
    }
}


