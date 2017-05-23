<?php

//test comment please ignore

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PsuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $psu1=new \App\Models\Psu();
        $psu1->price= 49.99;
        $psu1->brand='corsair'; 
        $psu1->model='cx450m';
        $psu1->form_factor='atx';
        $psu1->max_wattage= 450;
        $psu1->fans= 1;
        $psu1->moduler='semi'; 
        $psu1->efficiency='80+bronze';
        $psu1->pcie_62pin= 2;
        $psu1->photo='psu/psu1.jpeg';
        $psu1->save();
        
        $psu2=new \App\Models\Psu();
        $psu2->price= 29.99;
        $psu2->brand='evga';
        $psu2->model='500b';
        $psu2->form_factor='atx12v/eps12v';
        $psu2->max_wattage= 500;
        $psu2->fans= 1;
        $psu2->moduler='no';
        $psu2->efficiency='80+bronze';
        $psu2->pcie_62pin= 2;
        $psu2->photo='psu/psu2.jpeg';
        $psu2->save();
        
        $psu3=new \App\Models\Psu();
        $psu3->price=74.89;
        $psu3->brand='evga';
        $psu3->model='supernova 650';
        $psu3->form_factor='atx12v/eps12v';
        $psu3->max_wattage= 650;
        $psu3->fans= 1;
        $psu3->moduler='full';
        $psu3->efficiency='80+gold';
        $psu3->pcie_62pin= 4;
        $psu3->photo='psu/psu3.jpeg';
        $psu3->save();
        
        $psu4=new \App\Models\Psu();
        $psu4->price=99.99;
        $psu4->brand='evga';
        $psu4->model='supernova g3 750';
        $psu4->form_factor='atx12v/eps12v';
        $psu4->max_wattage=750;
        $psu4->fans=1;
        $psu4->moduler='full';
        $psu4->efficiency='80+gold';
        $psu4->pcie_62pin=4;
        $psu4->photo='psu/psu4.jpeg';
        $psu4->save();
        
        $psu5=new \App\Models\Psu();
        $psu5->price=29.89;
        $psu5->brand='evga';
        $psu5->model='430W 80+';
        $psu5->form_factor='atx12v/eps12v';
        $psu5->max_wattage=430;
        $psu5->fans=1;
        $psu5->moduler='no';
        $psu5->efficiency='80+';
        $psu5->pcie_62pin=0;
        $psu5->photo='psu/psu5.jpeg';
        $psu5->save();
        
        $psu6=new \App\Models\Psu();
        $psu6->price=79.89;
        $psu6->brand='evga';
        $psu6->model='supernova 650';
        $psu6->form_factor='atx';
        $psu6->max_wattage=650;
        $psu6->fans=1;
        $psu6->moduler='full';
        $psu6->efficiency='80+gold';
        $psu6->pcie_62pin=2;
        $psu6->photo='psu/psu6.jpeg';
        $psu6->save();
        
        $psu7=new \App\Models\Psu();
        $psu7->price=116.89;
        $psu7->brand='evga';
        $psu7->model='supernova 850';
        $psu7->form_factor='atx';
        $psu7->max_wattage=850;
        $psu7->fans=1;
        $psu7->moduler='full';
        $psu7->efficiency='80=gold';
        $psu7->pcie_62pin=2;
        $psu7->photo='psu/psu7.jpeg';
        $psu7->save();
        
        $psu8=new \App\Models\Psu();
        $psu8->price=33.90;
        $psu8->brand='seasonic';
        $psu8->model='S12II 520W 80+';
        $psu8->form_factor='atx12v/eps12v';
        $psu8->max_wattage=520;
        $psu8->fans=1;
        $psu8->moduler='full';
        $psu8->efficiency='80+bronze';
        $psu8->pcie_62pin=1;
        $psu8->photo='psu/psu8.jpeg';
        $psu8->save();
        
        $psu9=new \App\Models\Psu();
        $psu9->price=59.88;
        $psu9->brand='corsair';
        $psu9->model='cx550m';
        $psu9->form_factor='atx';
        $psu9->max_wattage=550;
        $psu9->fans=1;
        $psu9->moduler='semi';
        $psu9->efficiency='80+bronze';
        $psu9->pcie_62pin=2;
        $psu9->photo='psu/psu9.jpeg';
        $psu9->save();
        
        $psu10=new \App\Models\Psu();
        $psu10->price=49.99;
        $psu10->brand='corsair';
        $psu10->model='cx750m';
        $psu10->form_factor='atx';
        $psu10->max_wattage=750;
        $psu10->fans=1;
        $psu10->moduler='semi';
        $psu10->efficiency='80+bronze';
        $psu10->pcie_62pin=4;
        $psu10->photo='psu/psu10.jpeg';
        $psu10->save();
        
        $psu11=new \App\Models\Psu();
        $psu11->price=38.98;
        $psu11->brand='evga';
        $psu11->model='500W 80+';
        $psu11->form_factor='atx';
        $psu11->max_wattage=500;
        $psu11->fans=1;
        $psu11->moduler='semi';
        $psu11->efficiency='80+bronze';
        $psu11->pcie_62pin=2;
        $psu11->photo='psu/psu11.jpeg';
        $psu11->save();
        
        $psu12=new \App\Models\Psu();
        $psu12->price=46.89;
        $psu12->brand='evga';
        $psu12->model='600b';
        $psu12->form_factor='atx12v/eps12v';
        $psu12->max_wattage=600;
        $psu12->fans=1;
        $psu12->moduler='no';
        $psu12->efficiency='80=bronze';
        $psu12->pcie_62pin=2;
        $psu12->photo='psu/psu12.jpeg';
        $psu12->save();
        
        $psu13=new \App\Models\Psu();
        $psu13->price=184.99;
        $psu13->brand='corsair';
        $psu13->model='hx1000i';
        $psu13->form_factor='atx12v/eps12v';
        $psu13->max_wattage=1000;
        $psu13->fans=1;
        $psu13->moduler='full';
        $psu13->efficiency='80+plantinum';
        $psu13->pcie_62pin=4;
        $psu13->photo='psu/psu13.jpeg';
        $psu13->save();
        
        $psu14=new \App\Models\Psu();
        $psu14->price=84.99;
        $psu14->brand='corsair';
        $psu14->model='rm650x';
        $psu14->form_factor='atx';
        $psu14->max_wattage=650;
        $psu14->fans=1;
        $psu14->moduler='full';
        $psu14->efficiency='80+gold';
        $psu14->pcie_62pin=4;
        $psu14->photo='psu/psu14.jpeg';
        $psu14->save();
        
        $psu15=new \App\Models\Psu();
        $psu15->price=99.99;
        $psu15->brand='corsair';
        $psu15->model='rm750x';
        $psu15->form_factor='atx';
        $psu15->max_wattage=750;
        $psu15->fans=1;
        $psu15->moduler='full';
        $psu15->efficiency='80+gold';
        $psu15->pcie_62pin=4;
        $psu15->photo='psu/psu15.jpeg';
        $psu15->save();
        
        $psu16=new \App\Models\Psu();
        $psu16->price=79.39;
        $psu16->brand='evga';
        $psu16->model='SuperNOVA GS 550W 80+';
        $psu16->form_factor='atx';
        $psu16->max_wattage=850;
        $psu16->fans=1;
        $psu16->moduler='full';
        $psu16->efficiency='80+gold';
        $psu16->pcie_62pin=2;
        $psu16->photo='psu/psu16.jpeg';
        $psu16->save();
        
        $psu17=new \App\Models\Psu();
        $psu17->price=74.99;
        $psu17->brand='corsair';
        $psu17->model='rm550x';
        $psu17->form_factor='atx';
        $psu17->max_wattage=550;
        $psu17->fans=1;
        $psu17->moduler='full';
        $psu17->efficiency='80+gold';
        $psu17->pcie_62pin=2;
        $psu17->photo='psu/psu17.jpeg';
        $psu17->save();
        
        $psu18=new \App\Models\Psu();
        $psu18->price=31.49;
        $psu18->brand='evga';
        $psu18->model='500w';
        $psu18->form_factor='atx12v/eps12v';
        $psu18->max_wattage=500;
        $psu18->fans=1;
        $psu18->moduler='no';
        $psu18->efficiency='80+';
        $psu18->pcie_62pin=2;
        $psu18->photo='psu/psu18.jpeg';
        $psu18->save();
        
        $psu19=new \App\Models\Psu();
        $psu19->price=49.99;
        $psu19->brand='thermaltake';
        $psu19->model='750w gold';
        $psu19->form_factor='atx12v/eps12v';
        $psu19->max_wattage=750;
        $psu19->fans=1;
        $psu19->moduler='semi';
        $psu19->efficiency='80+gold';
        $psu19->pcie_62pin=4;
        $psu19->photo='psu/psu19.jpeg';
        $psu19->save();
        
        $psu20=new \App\Models\Psu();
        $psu20->price=41.65;
        $psu20->brand='thermaltake';
        $psu20->model='tr2 500w';
        $psu20->form_factor='atx12v';
        $psu20->max_wattage=500;
        $psu20->fans=1;
        $psu20->moduler='no';
        $psu20->efficiency='none';
        $psu20->pcie_62pin=1;
        $psu20->photo='psu/psu20.jpeg';
        $psu20->save();
    }
}
