<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $os1= new \App\Models\Os();
        $os1->price=199.99;
        $os1->model='windows 10 pro full';
        $os1->architecture='32bit, 64bit';
        $os1->max_supported_memory=512;
        $os1->kernel='none';
        $os1->brand='Microsoft';
        $os1->photo='os/os1.jpeg';
        $os1->save();

        $os2= new \App\Models\Os();
        $os2->price=223.10;
        $os2->model='windows 7 home premium full';
        $os2->architecture='32bit, 64bit';
        $os2->max_supported_memory=16;
        $os2->kernel='none';
        $os2->brand='Microsoft';
        $os2->photo='os/os2.jpeg';
        $os2->save();

        $os3= new \App\Models\Os();
        $os3->price=109.99;
        $os3->model='windows 7 home premium sp1';
        $os3->architecture=64;
        $os3->max_supported_memory=16;
        $os3->kernel='none';
        $os3->brand='Microsoft';
        $os3->photo='os/os3.jpeg';
        $os3->save();

        $os4= new \App\Models\Os();
        $os4->price=104.88;
        $os4->model='windows 10 home full usb';
        $os4->architecture='32bit, 64bit';
        $os4->max_supported_memory=128;
        $os4->kernel='none';
        $os4->brand='Microsoft';
        $os4->photo='os/os4.jpeg';
        $os4->save();


    }
}
