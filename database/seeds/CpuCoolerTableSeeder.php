<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CpuCoolerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cpucooler1=new \App\Models\CpuCooler();
        $cpucooler1->price=24.88;
        $cpucooler1->brand='cooler master';
        $cpucooler1->model='hyper 212 evo';
        $cpucooler1->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3, lga775';
        $cpucooler1->liquid_cooled='no';
        $cpucooler1->radiator_size='none';
        $cpucooler1->noise_level='90.0-36.0 dbA';
        $cpucooler1->fan_rpm='600-900 rpm';
        $cpucooler1->height='159mm';
        $cpucooler1->photo='cpucooler/cpucooler1.jpeg';
        $cpucooler1->save();



        $cpucooler2=new \App\Models\CpuCooler();
        $cpucooler2->price=98.99;
        $cpucooler2->brand='corsair';
        $cpucooler2->model='h100i v2';
        $cpucooler2->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler2->liquid_cooled='yes';
        $cpucooler2->radiator_size='240mm';
        $cpucooler2->noise_level='37.7 dbA';
        $cpucooler2->fan_rpm='2435rpm';
        $cpucooler2->height='none';
        $cpucooler2->photo='cpucooler/cpucooler2.jpeg';
        $cpucooler2->save();



        $cpucooler3=new \App\Models\CpuCooler();
        $cpucooler3->price=34.89;
        $cpucooler3->brand='cryorig';
        $cpucooler3->model='cr-h7';
        $cpucooler3->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156';
        $cpucooler3->liquid_cooled='no';
        $cpucooler3->radiator_size='none';
        $cpucooler3->noise_level='1.0-25.0 dbA';
        $cpucooler3->fan_rpm='330-1600 rpm';
        $cpucooler3->height='145mm';
        $cpucooler3->photo='cpucooler/cpucooler3.jpeg';
        $cpucooler3->save();



        $cpucooler4=new \App\Models\CpuCooler();
        $cpucooler4->price='159.99';
        $cpucooler4->brand='nzxt';
        $cpucooler4->model='kraken x62';
        $cpucooler4->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler4->liquid_cooled='yes';
        $cpucooler4->radiator_size='280mm';
        $cpucooler4->noise_level='21.0-38.0 dbA';
        $cpucooler4->fan_rpm='500-1800';
        $cpucooler4->height='none';
        $cpucooler4->photo='cpucooler/cpucooler4.jpeg';
        $cpucooler4->save();




        $cpucooler5=new \App\Models\CpuCooler();
        $cpucooler5->price=99.99;
        $cpucooler5->brand='corsair';
        $cpucooler5->model='h100i';
        $cpucooler5->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler5->liquid_cooled='yes';
        $cpucooler5->radiator_size='240mm';
        $cpucooler5->noise_level='37.7 dbA';
        $cpucooler5->fan_rpm='2700rpm';
        $cpucooler5->height='none';
        $cpucooler5->photo='cpucooler/cpucooler5.jpeg';
        $cpucooler5->save();



        $cpucooler6=new \App\Models\CpuCooler();
        $cpucooler6->price=54.99;
        $cpucooler6->brand='corsair';
        $cpucooler6->model='h60';
        $cpucooler6->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler6->liquid_cooled='yes';
        $cpucooler6->radiator_size='120mm';
        $cpucooler6->noise_level='30.9 dbA';
        $cpucooler6->fan_rpm='2000 rpm';
        $cpucooler6->height='none';
        $cpucooler6->photo='cpucooler/cpucooler6.jpeg';
        $cpucooler6->save();



        $cpucooler7=new \App\Models\CpuCooler();
        $cpucooler7->price=29.88;
        $cpucooler7->brand='cryorig';
        $cpucooler7->model='cr-c7a';
        $cpucooler7->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156';
        $cpucooler7->liquid_cooled='no';
        $cpucooler7->radiator_size='none';
        $cpucooler7->noise_level='30.0 dbA';
        $cpucooler7->fan_rpm='600-2500 rpm';
        $cpucooler7->height='47mm';
        $cpucooler7->photo='cpucooler/cpucooler7.jpeg';
        $cpucooler7->save();


        $cpucooler8=new \App\Models\CpuCooler();
        $cpucooler8->price=144.49;
        $cpucooler8->brand='nzxt';
        $cpucooler8->model='kraken x52';
        $cpucooler8->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler8->liquid_cooled='yes';
        $cpucooler8->radiator_size='240mm';
        $cpucooler8->noise_level='21.0-36.0 dbA';
        $cpucooler8->fan_rpm='50-2000rpm';
        $cpucooler8->height='none';
        $cpucooler8->photo='cpucooler/cpucooler8.jpeg';
        $cpucooler8->save();



        $cpucooler9=new \App\Models\CpuCooler();
        $cpucooler9->price=65.49;
        $cpucooler9->brand='be quiet!';
        $cpucooler9->model='dark rock 3';
        $cpucooler9->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3, lga775';
        $cpucooler9->liquid_cooled='no';
        $cpucooler9->radiator_size='none';
        $cpucooler9->noise_level='8.4-21.1 dbA';
        $cpucooler9->fan_rpm='400-1400 rpm';
        $cpucooler9->height='160mm';
        $cpucooler9->photo='cpucooler/cpucooler9.jpeg';
        $cpucooler9->save();



        $cpucooler10=new \App\Models\CpuCooler();
        $cpucooler10->price=16.49;
        $cpucooler10->brand='cooler master';
        $cpucooler10->model='hyper t2';
        $cpucooler10->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3, lga775';
        $cpucooler10->liquid_cooled='no';
        $cpucooler10->radiator_size='none';
        $cpucooler10->noise_level='17.0-35.0 dbA';
        $cpucooler10->fan_rpm='2800rpm';
        $cpucooler10->height='140mm';
        $cpucooler10->photo='cpucooler/cpucooler10.jpeg';
        $cpucooler10->save();




        $cpucooler11=new \App\Models\CpuCooler();
        $cpucooler11->price=19.99;
        $cpucooler11->brand='cooler master';
        $cpucooler11->model='hyper 212 led';
        $cpucooler11->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3, lga775';
        $cpucooler11->liquid_cooled='no';
        $cpucooler11->radiator_size='none';
        $cpucooler11->noise_level='9.0-31.0 dbA';
        $cpucooler11->fan_rpm='600-1600 rpm';
        $cpucooler11->height='160mm';
        $cpucooler11->photo='cpucooler/cpucooler11.jpeg';
        $cpucooler11->save();



        $cpucooler12=new \App\Models\CpuCooler();
        $cpucooler12->price=88.15;
        $cpucooler12->brand='noctua';
        $cpucooler12->model='nh-d15';
        $cpucooler12->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler12->liquid_cooled='none';
        $cpucooler12->radiator_size='none';
        $cpucooler12->noise_level='19.2-24.6 dbA';
        $cpucooler12->fan_rpm='300-1500 rpm';
        $cpucooler12->height='165mm';
        $cpucooler12->photo='cpucooler/cpucooler12.jpeg';
        $cpucooler12->save();



        $cpucooler13=new \App\Models\CpuCooler();
        $cpucooler13->price=16.49;
        $cpucooler13->brand='cooler master';
        $cpucooler13->model='hyper t2';
        $cpucooler13->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3, lga775';
        $cpucooler13->liquid_cooled='no';
        $cpucooler13->radiator_size='none';
        $cpucooler13->noise_level='17.0-35.0 dbA';
        $cpucooler13->fan_rpm='2800 rpm';
        $cpucooler13->height='140mm';
        $cpucooler13->photo='cpucooler/cpucooler13.jpeg';
        $cpucooler13->save();



        $cpucooler14=new \App\Models\CpuCooler();
        $cpucooler14->price=49.99;
        $cpucooler14->brand='corsair';
        $cpucooler14->model='h55';
        $cpucooler14->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler14->liquid_cooled='yes';
        $cpucooler14->radiator_size='120mm';
        $cpucooler14->noise_level='30.3 dbA';
        $cpucooler14->fan_rpm='1700 rpm';
        $cpucooler14->height='none';
        $cpucooler14->photo='cpucooler/cpucooler14.jpeg';
        $cpucooler14->save();




        $cpucooler15=new \App\Models\CpuCooler();
        $cpucooler15->price=299.99;
        $cpucooler15->brand='phanteks';
        $cpucooler15->model='ph-tc14pe-bl';
        $cpucooler15->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3, lga775';
        $cpucooler15->liquid_cooled='no';
        $cpucooler15->radiator_size='none';
        $cpucooler15->noise_level='13.4-19.0 dbA';
        $cpucooler15->fan_rpm='700-1200 rpm';
        $cpucooler15->height='171mm';
        $cpucooler15->photo='cpucooler/cpucooler15.jpeg';
        $cpucooler15->save();




        $cpucooler16=new \App\Models\CpuCooler();
        $cpucooler16->price=124.99;
        $cpucooler16->brand='corsair';
        $cpucooler16->model='h115i';
        $cpucooler16->sockets='am2, am2+, am3, am3+, am4, fm1, fm2, fm2+, lga1150, lga1151, lga1155, lga1156, lga1366, lga2011, lga2011-3';
        $cpucooler16->liquid_cooled='yes';
        $cpucooler16->radiator_size='280mm';
        $cpucooler16->noise_level='40.0 dbA';
        $cpucooler16->fan_rpm='2000 rpm';
        $cpucooler16->height='none';
        $cpucooler16->photo='cpucooler/cpucooler16.jpeg';
        $cpucooler16->save();

    }
}
