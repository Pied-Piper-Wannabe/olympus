<?php

//test comment please ignore

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class BuildsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $build = new \App\Models\Builds();
        $build->name = 'i3 Manjaro Mini w/Mechanical Keyboard';
        $build->created_by = 1;
        $build->description = 'My personal mini box containing i3 Majaro. Custom with a mech keyboard.';
        $build->price = 2000.00;
        $build->motherboard = 1;
        $build->cpu = 2;
        $build->gpu = 1;
        $build->ram = 1;
        $build->cpu_cooler = 2;
        $build->hdd = 1;
        $build->psu = 4;
        $build->case = 1;
        $build->operating_system = 1;
        $build->misc = '1,2';
        $build->save();

    }
}


