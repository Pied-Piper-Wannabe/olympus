<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GpuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gpu1=new \App\Models\Gpu();
        $gpu1->price=768.99;
        $gpu1->brand='asus';
        $gpu1->model='strix-gtx1080ti-011g-gaming';
        $gpu1->interface='pcie x16';
        $gpu1->chipset='geforce gtx 1080ti';
        $gpu1->mem_size=11;
        $gpu1->mem_type='gddr5x';
        $gpu1->core_clock=1.57;
        $gpu1->boost_clock=1.71;
        $gpu1->tdp=250;
        $gpu1->fan='yes';
        $gpu1->sli_support='yes';
        $gpu1->crossfire_support='no';
        $gpu1->length=298;
        $gpu1->gsync='yes';
        $gpu1->freesync='no';
        $gpu1->dvi_d=1;
        $gpu1->display_port=2;
        $gpu1->hdmi=2;
        $gpu1->save();
        
        $gpu2=new \App\Models\Gpu();
        $gpu2->price=119.99;
        $gpu2->brand='evga';
        $gpu2->model='04g-p4-6253-kr';
        $gpu2->interface='pcie x16';
        $gpu2->chipset='geforce gtx 1050ti';
        $gpu2->mem_size=4;
        $gpu2->mem_type='gddr5';
        $gpu2->core_clock=1.35;
        $gpu2->boost_clock=1.47;
        $gpu2->tdp=75;
        $gpu2->fan='yes';
        $gpu2->sli_support='no';
        $gpu2->crossfire_support='no';
        $gpu2->length=145;
        $gpu2->gsync='yes';
        $gpu2->freesync='none';
        $gpu2->dvi_d=1;
        $gpu2->display_port=1;
        $gpu2->hdmi=1;
        $gpu2->save();
        
        $gpu3=new \App\Models\Gpu();
        $gpu3->price=220.99;
        $gpu3->brand='gigabyte';
        $gpu3->model='gv-rx580gaming-8gd';
        $gpu3->interface='pcie x16';
        $gpu3->chipset='radeon rx 580';
        $gpu3->mem_size=8;
        $gpu3->mem_type='gdrr5';
        $gpu3->core_clock=1.26;
        $gpu3->boost_clock=1.35;
        $gpu3->tdp=185;
        $gpu3->fan='yes';
        $gpu3->sli_support='no';
        $gpu3->crossfire_support='4way crossfire';
        $gpu3->length=232;
        $gpu3->gsync='none';
        $gpu3->freesync='yes';
        $gpu3->dvi_d=1;
        $gpu3->display_port=3;
        $gpu3->hdmi=1;
        $gpu3->save();
        
        $gpu4=new \App\Models\Gpu();
        $gpu4->price=259.99;
        $gpu4->brand='msi';
        $gpu4->model='geforce gtx 1060 gaming x 60';
        $gpu4->interface='pcie x16';
        $gpu4->chipset='geforce gtx 1060 6gb';
        $gpu4->mem_size=6;
        $gpu4->mem_type='gddr5';
        $gpu4->core_clock=1.51;
        $gpu4->boost_clock=1.81;
        $gpu4->tdp=120;
        $gpu4->fan='yes';
        $gpu4->sli_support='no';
        $gpu4->crossfire_support='no';
        $gpu4->length=277;
        $gpu4->gsync='yes';
        $gpu4->freesync='none';
        $gpu4->dvi_d=1;
        $gpu4->display_port=3;
        $gpu4->hdmi=1;
        $gpu4->save();
        
        $gpu5=new \App\Models\Gpu();
        $gpu5->price=408.80;
        $gpu5->brand='asus';
        $gpu5->model='rog-strix-gtx1070-o8g-gaming';
        $gpu5->interface='pcie x16';
        $gpu5->chipset='geforce gtx 1070';
        $gpu5->mem_size=8;
        $gpu5->mem_type='gddr5';
        $gpu5->core_clock=1.63;
        $gpu5->boost_clock=1.86;
        $gpu5->tdp=150;
        $gpu5->fan='yes';
        $gpu5->sli_support='yes';
        $gpu5->crossfire_support='no';
        $gpu5->length=298;
        $gpu5->gsync='yes';
        $gpu5->freesync='none';
        $gpu5->dvi_d=1;
        $gpu5->display_port=2;
        $gpu5->hdmi=2;
        $gpu5->save();
        
        $gpu6=new \App\Models\Gpu();
        $gpu6->price=114.99;
        $gpu6->brand='evga';
        $gpu6->model='04g-p4-6251-kr';
        $gpu6->interface='pcie x16';
        $gpu6->chipset='geforce gtx 1050ti';
        $gpu6->mem_size=4;
        $gpu6->mem_type='gddr5';
        $gpu6->core_clock=1.29;
        $gpu6->boost_clock=1.39;
        $gpu6->tdp=75;
        $gpu6->fan='yes';
        $gpu6->sli_support='no';
        $gpu6->crossfire_support='no';
        $gpu6->length=145;
        $gpu6->gsync='yes';
        $gpu6->freesync='none';
        $gpu6->dvi_d=1;
        $gpu6->display_port=1;
        $gpu6->hdmi=1;
        $gpu6->save();
        
        $gpu7=new \App\Models\Gpu();
        $gpu7->price=210.78;
        $gpu7->brand='evga';
        $gpu7->model='04g-p4-6163-kr';
        $gpu7->interface='pcie x16';
        $gpu7->chipset='geforce gtx 1060 6gb';
        $gpu7->mem_size=6;
        $gpu7->mem_type='gddr5';
        $gpu7->core_clock=1.61;
        $gpu7->boost_clock=1.83;
        $gpu7->tdp=120;
        $gpu7->fan='yes';
        $gpu7->sli_support='no';
        $gpu7->crossfire_support='no';
        $gpu7->length=173;
        $gpu7->gsync='yes';
        $gpu7->freesync='none';
        $gpu7->dvi_d=1;
        $gpu7->display_port=3;
        $gpu7->hdmi=1;
        $gpu7->save();
        
        $gpu8=new \App\Models\Gpu();
        $gpu8->price=394.99;
        $gpu8->brand='msi';
        $gpu8->model='gtx 1070 gaming x8g';
        $gpu8->interface='pcie x16';
        $gpu8->chipset='geforce gtx 1070';
        $gpu8->mem_size=8;
        $gpu8->mem_type='gddr5';
        $gpu8->core_clock=1.51;
        $gpu8->boost_clock=1.80;
        $gpu8->tdp=130;
        $gpu8->fan='yes';
        $gpu8->sli_support='yes';
        $gpu8->crossfire_support='no';
        $gpu8->length=279;
        $gpu8->gsync='yes';
        $gpu8->freesync='none';
        $gpu8->dvi_d=1;
        $gpu8->display_port=3;
        $gpu8->hdmi=1;
        $gpu8->save();
        
        $gpu9=new \App\Models\Gpu();
        $gpu9->price=374.99;
        $gpu9->brand='asus';
        $gpu9->model='dual-gtx1070-o8g';
        $gpu9->interface='pcie x16';
        $gpu9->chipset='geforce gtx 1070';
        $gpu9->mem_size=8;
        $gpu9->mem_type='gddr5';
        $gpu9->core_clock=1.58;
        $gpu9->boost_clock=1.80;
        $gpu9->tdp=150;
        $gpu9->fan='yes';
        $gpu9->sli_support='yes';
        $gpu9->crossfire_support='no';
        $gpu9->length=240;
        $gpu9->gsync='yes';
        $gpu9->freesync='none';
        $gpu9->dvi_d=1;
        $gpu9->display_port=2;
        $gpu9->hdmi=2;
        $gpu9->save();
        
        $gpu10=new \App\Models\Gpu();
        $gpu10->price=379.99;
        $gpu10->brand='evga';
        $gpu10->model='08g-p4-5173-kr';
        $gpu10->interface='pcie x16';
        $gpu10->chipset='geforce gtx 1070';
        $gpu10->mem_size=8;
        $gpu10->mem_type='gddr5';
        $gpu10->core_clock=1.59;
        $gpu10->boost_clock=1.78;
        $gpu10->tdp=170;
        $gpu10->fan='yes';
        $gpu10->sli_support='yes';
        $gpu10->crossfire_support='no';
        $gpu10->length=267;
        $gpu10->gsync='yes';
        $gpu10->freesync='none';
        $gpu10->dvi_d=1;
        $gpu10->display_port=3;
        $gpu10->hdmi=1;
        $gpu10->save();
        
        $gpu11=new \App\Models\Gpu();
        $gpu11->price=198.88;
        $gpu11->brand='gigabyte';
        $gpu11->model='gv-rx580gaming-4gd';
        $gpu11->interface='pcie x16';
        $gpu11->chipset='radeon rx 580';
        $gpu11->mem_size=4;
        $gpu11->mem_type='gddr5';
        $gpu11->core_clock=1.26;
        $gpu11->boost_clock=1.35;
        $gpu11->tdp=185;
        $gpu11->fan='yes';
        $gpu11->sli_support='no';
        $gpu11->crossfire_support='4way crossfire';
        $gpu11->length=232;
        $gpu11->gsync='none';
        $gpu11->freesync='yes';
        $gpu11->dvi_d=1;
        $gpu11->display_port=3;
        $gpu11->hdmi=1;
        $gpu11->save();
        
        $gpu12=new \App\Models\Gpu();
        $gpu12->price=329.99;
        $gpu12->brand='zotac';
        $gpu12->model='zt-p10700g-10m';
        $gpu12->interface='pcie x16';
        $gpu12->chipset='geforce gtx 1070';
        $gpu12->mem_size=8;
        $gpu12->mem_type='gddr5';
        $gpu12->core_clock=1.52;
        $gpu12->boost_clock=1.71;
        $gpu12->tdp=150;
        $gpu12->fan='yes';
        $gpu12->sli_support='yes';
        $gpu12->crossfire_support='no';
        $gpu12->length=210;
        $gpu12->gsync='yes';
        $gpu12->freesync='none';
        $gpu12->dvi_d=1;
        $gpu12->display_port=3;
        $gpu12->hdmi=1;
        $gpu12->save();
        
        $gpu13=new \App\Models\Gpu();
        $gpu13->price=544.98;
        $gpu13->brand='asus';
        $gpu13->model='rog strix-gtx1080-abg-gaming';
        $gpu13->interface='pcie x16';
        $gpu13->chipset='geforce gtx 1080';
        $gpu13->mem_size=8;
        $gpu13->mem_type='gddr5x';
        $gpu13->core_clock=1.67;
        $gpu13->boost_clock=1.83;
        $gpu13->tdp=180;
        $gpu13->fan='yes';
        $gpu13->sli_support='yes';
        $gpu13->crossfire_support='no';
        $gpu13->length='298mm';
        $gpu13->gsync='yes';
        $gpu13->freesync='none';
        $gpu13->dvi_d=1;
        $gpu13->display_port=2;
        $gpu13->hdmi=2;
        $gpu13->save();
        
        $gpu14=new \App\Models\Gpu();
        $gpu14->price=697.49;
        $gpu14->brand='evga';
        $gpu14->model='11g-p4-6390-kr';
        $gpu14->interface='pcie x16';
        $gpu14->chipset='geforce gtx 1080ti';
        $gpu14->mem_size=11;
        $gpu14->mem_type='gddr5x';
        $gpu14->core_clock=1.48;
        $gpu14->boost_clock=1.58;
        $gpu14->tdp=250;
        $gpu14->fan='yes';
        $gpu14->sli_support='yes';
        $gpu14->crossfire_support='no';
        $gpu14->length=267;
        $gpu14->gsync='yes';
        $gpu14->freesync='none';
        $gpu14->dvi_d='none';
        $gpu14->display_port=3;
        $gpu14->hdmi=1;
        $gpu14->save();
        
        $gpu15=new \App\Models\Gpu();
        $gpu15->price=489.99;
        $gpu15->brand='evga';
        $gpu15->model='08g-p4-6183-kr';
        $gpu15->interface='pcie x16';
        $gpu15->chipset='geforce gtx 1080';
        $gpu15->mem_size=8;
        $gpu15->mem_type='gddr5x';
        $gpu15->core_clock=1.71;
        $gpu15->boost_clock=1.85;
        $gpu15->tdp=180;
        $gpu15->fan='yes';
        $gpu15->sli_support='yes';
        $gpu15->crossfire_support='crossfire';
        $gpu15->length=267;
        $gpu15->gsync='yes';
        $gpu15->freesync='none';
        $gpu15->dvi_d=1;
        $gpu15->display_port=3;
        $gpu15->hdmi=1;
        $gpu15->save();
        
        $gpu16=new \App\Models\Gpu();
        $gpu16->price=84.98;
        $gpu16->brand='msi';
        $gpu16->model='gtx 1050 2g oc';
        $gpu16->interface='pcie x16';
        $gpu16->chipset='geforce gtx 1050';
        $gpu16->mem_size=2;
        $gpu16->mem_type='gddr5';
        $gpu16->core_clock=1.40;
        $gpu16->boost_clock=1.52;
        $gpu16->tdp=75;
        $gpu16->fan='yes';
        $gpu16->sli_support='no';
        $gpu16->crossfire_support='no';
        $gpu16->length=177;
        $gpu16->gsync='yes';
        $gpu16->freesync='none';
        $gpu16->dvi_d=1;
        $gpu16->display_port=1;
        $gpu16->hdmi=1;
        $gpu16->save();
        
        $gpu17=new \App\Models\Gpu();
        $gpu17->price=289.99;
        $gpu17->brand='asus';
        $gpu17->model='rog-strix-gtx1060-o6g-gaming';
        $gpu17->interface='pcie x16';
        $gpu17->chipset='geforce gtx 1060 6gb';
        $gpu17->mem_size=6;
        $gpu17->mem_type='gddr5';
        $gpu17->core_clock=1.62;
        $gpu17->boost_clock=1.87;
        $gpu17->tdp=120;
        $gpu17->fan='yes';
        $gpu17->sli_support='no';
        $gpu17->crossfire_support='no';
        $gpu17->length=298;
        $gpu17->gsync='yes';
        $gpu17->freesync='none';
        $gpu17->dvi_d=1;
        $gpu17->display_port=2;
        $gpu17->hdmi=2;
        $gpu17->save();
        
        $gpu18=new \App\Models\Gpu();
        $gpu18->price=167.20;
        $gpu18->brand='evga';
        $gpu18->model='03g-p4-6162';
        $gpu18->interface='pcie x16';
        $gpu18->chipset='geforce gtx 1060 3gb';
        $gpu18->mem_size=3;
        $gpu18->mem_type='ddr5';
        $gpu18->core_clock=1.61;
        $gpu18->boost_clock=1.83;
        $gpu18->tdp=120;
        $gpu18->fan='yes';
        $gpu18->sli_support='no';
        $gpu18->crossfire_support='no';
        $gpu18->length=173;
        $gpu18->gsync='yes';
        $gpu18->freesync='none';
        $gpu18->dvi_d=1;
        $gpu18->display_port=3;
        $gpu18->hdmi=1;
        $gpu18->save();
        
        $gpu19=new \App\Models\Gpu();
        $gpu19->price=99.99;
        $gpu19->brand='gigabyte';
        $gpu19->model='gv-rx460wf2oc-4gd';
        $gpu19->interface='pcie x16';
        $gpu19->chipset='radeon rx 460';
        $gpu19->mem_size=4;
        $gpu19->mem_type='ddr5';
        $gpu19->core_clock=1.09;
        $gpu19->boost_clock=1.21;
        $gpu19->tdp=75;
        $gpu19->fan='yes';
        $gpu19->sli_support='no';
        $gpu19->crossfire_support='yes';
        $gpu19->length=191;
        $gpu19->gsync='none';
        $gpu19->freesync='yes';
        $gpu19->dvi_d=1;
        $gpu19->display_port=1;
        $gpu19->hdmi=1;
        $gpu19->save();
        
        $gpu20=new \App\Models\Gpu();
        $gpu20->price=174.99;
        $gpu20->brand='msi';
        $gpu20->model='rx750 amor 4g oc';
        $gpu20->interface='pcie x16';
        $gpu20->chipset='radeon rx 570';
        $gpu20->mem_size=4;
        $gpu20->mem_type='gddr5';
        $gpu20->core_clock=1.17;
        $gpu20->boost_clock=1.24;
        $gpu20->tdp=150;
        $gpu20->fan='yes';
        $gpu20->sli_support='no';
        $gpu20->crossfire_support='4way crossfire';
        $gpu20->length=246;
        $gpu20->gsync='no';
        $gpu20->freesync='yes';
        $gpu20->dvi_d=1;
        $gpu20->display_port=3;
        $gpu20->hdmi=1;
        $gpu20->save();
    }
}
