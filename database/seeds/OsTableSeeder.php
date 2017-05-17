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
        $os1->name='windows 10 pro full';
        $os1->architecture=32, 64;
        $os1->max_supported_memory=512;
        $os1->kernel='none';
        $os1->manufacturer='windows';
        $os1->save();

        $os2= new \App\Models\Os();
        $os2->price=223.10;
        $os2->name='windows 7 home premium full';
        $os2->architecture=32, 64;
        $os2->max_supported_memory=16;
        $os2->kernel='none';
        $os2->manufacturer='windows';
        $os2->save();

        $os3= new \App\Models\Os();
        $os3->price=109.99;
        $os3->name='windows 7 home premium sp1';
        $os3->architecture=64;
        $os3->max_supported_memory=16;
        $os3->kernel='none';
        $os3->manufacturer='windows';
        $os3->save();

        $os4= new \App\Models\Os();
        $os4->price=104.88;
        $os4->name='windows 10 home full usb';
        $os4->architecture=32, 64;
        $os4->max_supported_memory=128;
        $os4->kernel='none';
        $os4->manufacturer='windows';
        $os4->save();

        $os5= new \App\Models\Os();
        $os5->price=
        $os5->name=
        $os5->architecture=
        $os5->max_supported_memory=
        $os5->kernel=
        $os5->manufacturer=
        $os5->save();

        $os6= new \App\Models\Os();
        $os6->price=
        $os6->name=
        $os6->architecture=
        $os6->max_supported_memory=
        $os6->kernel=
        $os6->manufacturer=
        $os6->save();

        $os7= new \App\Models\Os();
        $os7->price=
        $os7->name=
        $os7->architecture=
        $os7->max_supported_memory=
        $os7->kernel=
        $os7->manufacturer=
        $os7->save();

    }
}
