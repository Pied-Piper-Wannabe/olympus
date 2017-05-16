<?php

//test comment please ignore

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ram1=new \App\Models\Ram();
        $ram1->price=126.94;
        $ram1->brand='corsair';
        $ram1->model='cmk16gx4m2b3000c15';
        $ram1->memory_slot_type='288-pin DIMM';
        $ram1->speed='ddr4 3000';
        $ram1->size='16gb(2x8gb)';
        $ram1->CASlatency=15;
        $ram1->voltage=1.35;
        $ram1->heat_sink='yes';
        $ram1->ECC='no';
        $ram1->registered='no';
        $ram1->color='black and yellow';
        $ram1->save();
        
        $ram2=new \App\Models\Ram();
        $ram2->price=110.53;
        $ram2->brand='kingston';
        $ram2->model='hx421c14fbk2/16';
        $ram2->memory_slot_type='288-pin DIMM';
        $ram2->speed='ddr4 2133';
        $ram2->size='16gb (2x8gb)';
        $ram2->CASlatency=14;
        $ram2->voltage=1.2;
        $ram2->heat_sink='yes';
        $ram2->ECC='no';
        $ram2->registered='no';
        $ram2->color='black and white';
        $ram2->save();
        
        $ram3=new \App\Models\Ram();
        $ram3->price='70.15';
        $ram3->brand='kingston';
        $ram3->model='hx421c14fbk2/8';
        $ram3->memory_slot_type='288-pin DIMM';
        $ram3->speed='dd4 2400';
        $ram3->size='16gb (2x8gb)';
        $ram3->CASlatency=14;
        $ram3->voltage=1.2;
        $ram3->heat_sink='yes';
        $ram3->ECC='no';
        $ram3->registered='no';
        $ram3->color='black and silver';
        $ram3->save();
        
        $ram4=new \App\Models\Ram();
        $ram4->price='94.99';
        $ram4->brand='team';
        $ram4->model='tdged416g2400hc14dc01';
        $ram4->memory_slot_type='288-pin DIMM';
        $ram4->speed='ddr4 2400';
        $ram4->size='16gb (2x8gb)';
        $ram4->CASlatency=14;
        $ram4->voltage=1.2;
        $ram4->heat_sink='yes';
        $ram4->ECC='no';
        $ram4->registered='no';
        $ram4->color='black and silver';
        $ram4->save();
        
        $ram5=new \App\Models\Ram();
        $ram5->price=54.99;
        $ram5->brand='crucial';
        $ram5->model='bls8g4d240fsb';
        $ram5->memory_slot_type='288-pin DIMM';
        $ram5->speed='ddr4 2400';
        $ram5->size='8gb (1x8gb)';
        $ram5->CASlatency=16;
        $ram5->voltage=1.2;
        $ram5->heat_sink='yes';
        $ram5->ECC='no';
        $ram5->registered='no';
        $ram5->color='silver';
        $ram5->save();
        
        $ram6=new \App\Models\Ram();
        $ram6->price=54.77;
        $ram6->brand='crucial';
        $ram6->model='ct8g4dfs8213';
        $ram6->memory_slot_type='288-pin DIMM';
        $ram6->speed='ddr4 2133';
        $ram6->size='8gb (1x8gb)';
        $ram6->CASlatency=15;
        $ram6->voltage=1.2;
        $ram6->heat_sink='no';
        $ram6->ECC='no';
        $ram6->registered='no';
        $ram6->color='black and green';
        $ram6->save();
        
        $ram7=new \App\Models\Ram();
        $ram7->price=54.89;
        $ram7->brand='g skill';
        $ram7->model='f4-2400c15s-8gis';
        $ram7->memory_slot_type='288-pin DIMM';
        $ram7->speed='ddr4 2400';
        $ram7->size='8gb (1x8gb)';
        $ram7->CASlatency=15;
        $ram7->voltage=1.2;
        $ram7->heat_sink='no';
        $ram7->ECC='no';
        $ram7->registered='no';
        $ram7->color='black and red';
        $ram7->save();
        
        $ram8=new \App\Models\Ram();
        $ram8->price=159.89;
        $ram8->brand='g skill';
        $ram8->model='f4-3200c16d-16gtzr';
        $ram8->memory_slot_type='288-pin DIMM';
        $ram8->speed='ddr4 3200';
        $ram8->size='16gb (2x8gb)';
        $ram8->CASlatency=16;
        $ram8->voltage=1.35;
        $ram8->heat_sink='yes';
        $ram8->ECC='no';
        $ram8->registered='no';
        $ram8->color='black';
        $ram8->save();
        
        $ram9=new \App\Models\Ram();
        $ram9->price='113.88';
        $ram9->brand='g skill';
        $ram9->model='f4-2400c15d-16gvr';
        $ram9->memory_slot_type='288-pin DIMM';
        $ram9->speed='ddr4 2400';
        $ram9->size='16gb (2x8gb';
        $ram9->CASlatency=15;
        $ram9->voltage=1.2;
        $ram9->heat_sink='yes';
        $ram9->ECC='no';
        $ram9->registered='no';
        $ram9->color='black and red';
        $ram9->save();
        
        $ram10=new \App\Models\Ram();
        $ram10->price='223.99';
        $ram10->brand='g skill';
        $ram10->model='f4-3200c16d-32gvk';
        $ram10->memory_slot_type='288-pin DIMM';
        $ram10->speed='ddr4 3200';
        $ram10->size='32gb (2x16gb)';
        $ram10->CASlatency=16;
        $ram10->voltage=1.35;
        $ram10->heat_sink='yes';
        $ram10->ECC='no';
        $ram10->registered='no';
        $ram10->color='black';
        $ram10->save();
        
        $ram11=new \App\Models\Ram();
        $ram11->price=87.40;
        $ram11->brand='kingston';
        $ram11->model='hx318c10fbk2/16';
        $ram11->memory_slot_type='240-pin DIMM';
        $ram11->speed='ddr3 1866';
        $ram11->size='16gb (2x8gb)';
        $ram11->CASlatency=10;
        $ram11->voltage=1.5;
        $ram11->heat_sink='yes';
        $ram11->ECC='no';
        $ram11->registered='no';
        $ram11->color='black and silver';
        $ram11->save();
        
        $ram12=new \App\Models\Ram();
        $ram12->price=50.00;
        $ram12->brand='patriot';
        $ram12->model='psd48g2133k';
        $ram12->memory_slot_type='288-pin DIMM';
        $ram12->speed='ddr4 2133';
        $ram12->size='8gb (2x4gb)';
        $ram12->CASlatency=15;
        $ram12->voltage=1.2
        $ram12->heat_sink='no';
        $ram12->ECC='no';
        $ram12->registered='no';
        $ram12->color='black and silver';
        $ram12->save();
        
        $ram13=new \App\Models\Ram();
        $ram13->price=64.99;
        $ram13->brand='corsair';
        $ram13->model='cmk8gx4m2b3000c15r';
        $ram13->memory_slot_type='288-pin DIMM';
        $ram13->speed='ddr4 3000';
        $ram13->size='8gb (2x4gb)';
        $ram13->CASlatency='15';
        $ram13->voltage=1.35;
        $ram13->heat_sink='yes';
        $ram13->ECC='no';
        $ram13->registered='no';
        $ram13->color='red';
        $ram13->save();
        
        $ram14=new \App\Models\Ram();
        $ram14->price=51.98;
        $ram14->brand='team';
        $ram14->model='tpd48gm2400hc1601';
        $ram14->memory_slot_type='288-pin DIMM';
        $ram14->speed='ddr4 2400';
        $ram14->size='8gb (1x8gb)';
        $ram14->CASlatency=16
        $ram14->voltage=1.2
        $ram14->heat_sink='yes';
        $ram14->ECC='yes';
        $ram14->registered='no';
        $ram14->color='black and gold';
        $ram14->save();
        
        $ram15=new \App\Models\Ram();
        $ram15->price='134.33';
        $ram15->brand='corsair';
        $ram15->model='cmk16gx4m2b3200c16';
        $ram15->memory_slot_type='288-pin DIMM';
        $ram15->speed='ddr4 3200';
        $ram15->size='16gb(2x8gb)';
        $ram15->CASlatency='16';
        $ram15->voltage=1.35;
        $ram15->heat_sink='yes';
        $ram15->ECC='no';
        $ram15->registered='no';
        $ram15->color='black and yellow';
        $ram15->save();
        
        $ram16=new \App\Models\Ram();
        $ram16->price='136.99';
        $ram16->brand='corsair';
        $ram16->model='cmk16gx4m2b3200c16w';
        $ram16->memory_slot_type='288-pin DIMM';
        $ram16->speed='ddr4 3200';
        $ram16->size='16gb (2x8gb)';
        $ram16->CASlatency=16
        $ram16->voltage=1.35;
        $ram16->heat_sink='yes';
        $ram16->ECC='no';
        $ram16->registered='no';
        $ram16->color='white';
        $ram16->save();
        
        $ram17=new \App\Models\Ram();
        $ram17->price=769.98;
        $ram17->brand='crucial';
        $ram17->model='ct64g4lfq424a';
        $ram17->memory_slot_type='288-pin DIMM';
        $ram17->speed='ddr4 2400';
        $ram17->size='64gb (1x64gb)';
        $ram17->CASlatency=17
        $ram17->voltage=1.2
        $ram17->heat_sink='no';
        $ram17->ECC='yes';
        $ram17->registered='yes';
        $ram17->color='black and green';
        $ram17->save();
        
        $ram18=new \App\Models\Ram();
        $ram18->price=59.99;
        $ram18->brand='crucial';
        $ram18->model='bls2k4g4d240fse';
        $ram18->memory_slot_type='288-pin DIMM';
        $ram18->speed='ddr4 2400';
        $ram18->size='8gb (2x4gb)';
        $ram18->CASlatency=16;
        $ram18->voltage=1.2;
        $ram18->heat_sink='yes';
        $ram18->ECC='no';
        $ram18->registered='no';
        $ram18->color='red';
        $ram18->save();
        
        $ram19=new \App\Models\Ram();
        $ram19->price=
        $ram19->brand=
        $ram19->model=
        $ram19->memory_slot_type=
        $ram19->speed=
        $ram19->size=
        $ram19->CASlatency=
        $ram19->voltage=
        $ram19->heat_sink=
        $ram19->ECC=
        $ram19->registered=
        $ram19->color=
        $ram19->save();
        
        $ram20=new \App\Models\Ram();
        $ram20->price=
        $ram20->brand=
        $ram20->model=
        $ram20->memory_slot_type=
        $ram20->speed=
        $ram20->size=
        $ram20->CASlatency=
        $ram20->voltage=
        $ram20->heat_sink=
        $ram20->ECC=
        $ram20->registered=
        $ram20->color=
        $ram20->save();
    }
}
