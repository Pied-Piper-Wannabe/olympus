<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hdd1=new \App\Models\Hdd();
        $hdd1->price=107.88;
        $hdd1->brand='samsung';
        $hdd1->model='mz-75e250b/am';
        $hdd1->size=250;
        $hdd1->interface='sata 6 gb/s';
        $hdd1->cache='none';
        $hdd1->rpm=0;
        $hdd1->form_factor='2.5';
        $hdd1->save();
        
        $hdd2=new \App\Models\Hdd();
        $hdd2->price=159.00;
        $hdd2->brand='samsung';
        $hdd2->model='mz-75e500b/am';
        $hdd2->size=500;
        $hdd2->interface='sata 6 gb/s';
        $hdd2->cache='none';
        $hdd2->rpm=0;
        $hdd2->form_factor='2.5';
        $hdd2->save();
        
        $hdd3=new \App\Models\Hdd();
        $hdd3->price=69.89;
        $hdd3->brand='seagate';
        $hdd3->model='st2000dm001';
        $hdd3->size=2000;
        $hdd3->interface='sata 6 gb/s';
        $hdd3->cache='64mb';
        $hdd3->rpm=7200;
        $hdd3->form_factor='3.5';
        $hdd3->save();
        
        $hdd4=new \App\Models\Hdd();
        $hdd4->price=48.88;
        $hdd4->brand='western digital';
        $hdd4->model='wd10ezex';
        $hdd4->size=1000;
        $hdd4->interface='sata 6 gb/s';
        $hdd4->cache='64mb';
        $hdd4->rpm=7200;
        $hdd4->form_factor='3.5';
        $hdd4->save();
        
        $hdd5=new \App\Models\Hdd();
        $hdd5->price=247.99;
        $hdd5->brand='samsung';
        $hdd5->model='mz-v6e500';
        $hdd5->size=500;
        $hdd5->interface='m.2';
        $hdd5->cache='512mb';
        $hdd5->rpm=0;
        $hdd5->form_factor='m.2-2280';
        $hdd5->save();
        
        $hdd6=new \App\Models\Hdd();
        $hdd6->price=349.99;
        $hdd6->brand='samsung';
        $hdd6->model='mz-75e1t0b/am';
        $hdd6->size=1000;
        $hdd6->interface='sata 6 gb/s';
        $hdd6->cache='none';
        $hdd6->rpm=0;
        $hdd6->form_factor='2.5';
        $hdd6->save();
        
        $hdd7=new \App\Models\Hdd();
        $hdd7->price=89.89;
        $hdd7->brand='seagate';
        $hdd7->model='st3000dm008';
        $hdd7->size=3000;
        $hdd7->interface='sata 6 gb/s';
        $hdd7->cache='64mb';
        $hdd7->rpm=7200;
        $hdd7->form_factor='3.5';
        $hdd7->save();
        
        $hdd8=new \App\Models\Hdd();
        $hdd8->price=117.39;
        $hdd8->brand='western digital';
        $hdd8->model='wd2003fzex';
        $hdd8->size=2000;
        $hdd8->interface='sata 6 gb/s';
        $hdd8->cache='64mb';
        $hdd8->rpm=7200;
        $hdd8->form_factor='3.5';
        $hdd8->save();
        
        $hdd9=new \App\Models\Hdd();
        $hdd9->price=8867.99;
        $hdd9->brand='intel';
        $hdd9->model='ssdpecme040t401';
        $hdd9->size=4000;
        $hdd9->interface='pcie x8';
        $hdd9->cache='none';
        $hdd9->rpm=0;
        $hdd9->form_factor='pcie'
        $hdd9->save();
        
        $hdd10=new \App\Models\Hdd();
        $hdd10->price=50.99;
        $hdd10->brand='kingston';
        $hdd10->model='suv400s37/120g';
        $hdd10->size=120;
        $hdd10->interface='sata 6 gb/s';
        $hdd10->cache='none';
        $hdd10->rpm=0;
        $hdd10->form_factor='2.5';
        $hdd10->save();
        
        $hdd11=new \App\Models\Hdd();
        $hdd11->price=323.98;
        $hdd11->brand='samsung';
        $hdd11->model='mz-v6p512bw';
        $hdd11->size=512;
        $hdd11->interface='m.2';
        $hdd11->cache='512mb';
        $hdd11->rpm=0;
        $hdd11->form_factor='m.2-2280';
        $hdd11->save();
        
        $hdd12=new \App\Models\Hdd();
        $hdd12->price=77.95;
        $hdd12->brand='sandisk';
        $hdd12->model='sdssda-240g-g26';
        $hdd12->size=240;
        $hdd12->interface='sata 6 gb/s';
        $hdd12->cache='none';
        $hdd12->rpm=0;
        $hdd12->form_factor='2.5';
        $hdd12->save();
        
        $hdd13=new \App\Models\Hdd();
        $hdd13->price=80.99;
        $hdd13->brand='kingston';
        $hdd13->model='shfs37a/240g';
        $hdd13->size=240;
        $hdd13->interface='sata 6 gb/s';
        $hdd13->cache='none';
        $hdd13->rpm=0;
        $hdd13->form_factor='2.5';
        $hdd13->save();
        
        $hdd14=new \App\Models\Hdd();
        $hdd14->price=127.98;
        $hdd14->brand='samsung';
        $hdd14->model='mz-v6e250';
        $hdd14->size=250;
        $hdd14->interface='m.2';
        $hdd14->cache='512mb';
        $hdd14->rpm=0;
        $hdd14->form_factor='m.2-2280';
        $hdd14->save();
        
        $hdd15=new \App\Models\Hdd();
        $hdd15->price=54.99;
        $hdd15->brand='sandisk';
        $hdd15->model='sdssda-120g-g26';
        $hdd15->size=120;
        $hdd15->interface='sata 6 gb/s';
        $hdd15->cache='none';
        $hdd15->rpm=0;
        $hdd15->form_factor='2.5';
        $hdd15->save();
        
        $hdd16=new \App\Models\Hdd();
        $hdd16->price=46.88;
        $hdd16->brand='seagate';
        $hdd16->model='st1000dm010';
        $hdd16->size=1000;
        $hdd16->interface='sata 6 gb/s';
        $hdd16->cache='64mb';
        $hdd16->rpm=7200;
        $hdd16->form_factor='3.5';
        $hdd16->save();

    }
}
