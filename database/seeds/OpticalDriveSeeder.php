<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class OpticalDriveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// ------------CHANGE CACHE TO DECIMAL-----------------        
        $op_drive1= new \App\Models\OpticalDrive();
        $op_drive1->price=194.89;
        $op_drive1->model='bw-12b1st/blk/g/as';
        $op_drive1->brand='asus';
        $op_drive1->interface='sata 3 gb/s';
        $op_drive1->cache=8;
        $op_drive1->cd_r=48;
        $op_drive1->cd_rw=24;
        $op_drive1->dvd_r=16;
        $op_drive1->dvd_r_dl=8;
        $op_drive1->dvd_rw=6;
        $op_drive1->dvd_ram=12;
        $op_drive1->bd_r=12;
        $op_drive1->save();


        $op_drive2= new \App\Models\OpticalDrive();
        $op_drive2->price=18.69;
        $op_drive2->model='drw-24b1st/blk/b/as';
        $op_drive2->brand='asus';
        $op_drive2->interface='sata 3 gb/s';
        $op_drive2->cache=2;
        $op_drive2->cd_r=48;
        $op_drive2->cd_rw=32;
        $op_drive2->dvd_r=12;
        $op_drive2->dvd_r_dl=12;
        $op_drive2->dvd_rw=6;
        $op_drive2->dvd_ram=12;
        $op_drive2->bd_r=0;
        $op_drive2->save();

        $op_drive3= new \App\Models\OpticalDrive();
        $op_drive3->price=16.88;
        $op_drive3->model='gh24nscob';
        $op_drive3->brand='lg';
        $op_drive3->interface='sata 3 gb/s';
        $op_drive3->cache=0;
        $op_drive3->cd_r=48;
        $op_drive3->cd_rw=24;
        $op_drive3->dvd_r=16;
        $op_drive3->dvd_r_dl=8;
        $op_drive3->dvd_rw=6;
        $op_drive3->dvd_ram=5;
        $op_drive3->bd_r=0;
        $op_drive3->save();

        $op_drive4= new \App\Models\OpticalDrive();
        $op_drive4->price=23.89;
        $op_drive4->model='sh-224bb';
        $op_drive4->brand='samsung';
        $op_drive4->interface='sata 3 gb/s';
        $op_drive4->cache=1.5;
        $op_drive4->cd_r=48;
        $op_drive4->cd_rw=24;
        $op_drive4->dvd_r=16;
        $op_drive4->dvd_r_dl=8;
        $op_drive4->dvd_rw=6;
        $op_drive4->dvd_ram=12;
        $op_drive4->bd_r=0;
        $op_drive4->save();


    }
}
