<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $case1=new \App\Models\Case();
        $case1->price=46.99;
        $case1->brand='corsair';
        $case1->model='200r';
        $case1->form_factor='atx_mid_tower';
        $case1->color='black';
        $case1->include_power='no';
        $case1->mobo_comp='atx, micro_atx, mini_itx';
        $case1->front_panel_usb='yes';
        $case1->save();
        
        $case2=new \App\Models\Case();
        $case2->price=39.99;
        $case2->brand='deepcool';
        $case2->model='tesseract sw';
        $case2->form_factor='atx_mid_tower';
        $case2->color='blue/black';
        $case2->include_power='no';
        $case2->mobo_comp='atx, micro_atx, mini_itx';
        $case2->front_panel_usb='yes';
        $case2->save();
        
        $case3=new \App\Models\Case();
        $case3->price=61.99;
        $case3->brand='nzxt';
        $case3->model='s340';
        $case3->form_factor='atx_mid_tower';
        $case3->color='black/red';
        $case3->include_power='no';
        $case3->mobo_comp='atx, micro_atx, mini_itx';
        $case3->front_panel_usb='yes';
        $case3->save();
        
        $case4=new \App\Models\Case();
        $case4->price=64.99;
        $case4->brand='nzxt';
        $case4->model='s340';
        $case4->form_factor='atx_mid_tower';
        $case4->color='white';
        $case4->include_power='no';
        $case4->mobo_comp='atx, micro_atx, mini_itx';
        $case4->front_panel_usb='yes';
        $case4->save();
        
        $case5=new \App\Models\Case();
        $case5->price=34.99;
        $case5->brand='fractal_design';
        $case5->model='core_2300';
        $case5->form_factor='atx_mid_tower';
        $case5->color='black';
        $case5->include_power='no';
        $case5->mobo_comp='atx, micro_atx, mini_itx';
        $case5->front_panel_usb='yes';
        $case5->save();
        
        $case6=new \App\Models\Case();
        $case6->price=89.99;
        $case6->brand='nzxt';
        $case6->model='s340_elite';
        $case6->form_factor='atx_mid_tower';
        $case6->color='black';
        $case6->include_power='no';
        $case6->mobo_comp='atx, micro_atx, mini_itx';
        $case6->front_panel_usb='yes';
        $case6->save();
        
        $case7=new \App\Models\Case();
        $case7->price=59.99;
        $case7->brand='nzxt';
        $case7->model='s340';
        $case7->form_factor='atx_mid_tower';
        $case7->color='black';
        $case7->include_power='no';
        $case7->mobo_comp='atx, micro_atx, mini_itx';
        $case7->front_panel_usb='yes';
        $case7->save();
        
        $case8=new \App\Models\Case();
        $case8->price=29.99;
        $case8->brand='thermaltake';
        $case8->model='versa_n21';
        $case8->form_factor='atx_mid_tower';
        $case8->color='black';
        $case8->include_power='no';
        $case8->mobo_comp='atx; micro_atx, mini_itx';
        $case8->front_panel_usb='yes';
        $case8->save();
        
        $case9=new \App\Models\Case();
        $case9->price=139.99;
        $case9->brand='corsair';
        $case9->model='crystal_460x_rgb';
        $case9->form_factor='atx_mid_tower';
        $case9->color='black';
        $case9->include_power='no';
        $case9->mobo_comp='atx, micro_atx, mini_itx';
        $case9->front_panel_usb='yes';
        $case9->save();
        
        $case10=new \App\Models\Case();
        $case10->price=19.99;
        $case10->brand='rosewill';
        $case10->model='fbm-05';
        $case10->form_factor='micro_atx_mini_tower';
        $case10->color='black';
        $case10->include_power='no';
        $case10->mobo_comp='micro_atx, mini_itx';
        $case10->front_panel_usb='yes';
        $case10->save();
        
        $case11=new \App\Models\Case();
        $case11->price=19.99;
        $case11->brand='rosewill';
        $case11->model='srm-01';
        $case11->form_factor='micro_atx_mini_tower';
        $case11->color='black';
        $case11->include_power='no';
        $case11->mobo_comp='micro_atx, mini_itx';
        $case11->front_panel_usb='yes';
        $case11->save();
        
        $case12=new \App\Models\Case();
        $case12->price=39.99;
        $case12->brand='thermaltake';
        $case12->model='core_v21';
        $case12->form_factor='micro_atx_mini_tower';
        $case12->color='black';
        $case12->include_power='no';
        $case12->mobo_comp'micro_atx, mini_itx';
        $case12->front_panel_usb='yes';
        $case12->save();
        
        $case13=new \App\Models\Case();
        $case13->price=149.99;
        $case13->brand='corsair';
        $case13->model='750d';
        $case13->form_factor='atx_full_tower';
        $case13->color='black';
        $case13->include_power='no';
        $case13->mobo_comp='atx, eatx, micro_atx, mini_itx,xl_atx';
        $case13->front_panel_usb='yes';
        $case13->save();
        
        $case14=new \App\Models\Case();
        $case14->price=39.99;
        $case14->brand='corsair';
        $case14->model='100r';
        $case14->form_factor='atx_mid_tower';
        $case14->color='black';
        $case14->include_power='no';
        $case14->mobo_comp='atx, micro_atx, mini_itx';
        $case14->front_panel_usb='yes';
        $case14->save();
        
        $case15=new \App\Models\Case();
        $case15->price=79.99;
        $case15->brand='corsair';
        $case15->model='carbide_400c';
        $case15->form_factor='atx_mid_tower';
        $case15->color'black';
        $case15->include_power='no';
        $case15->mobo_comp='atx, eatx, micro_atx, mini_itx';
        $case15->front_panel_usb='yes';
        $case15->save();
        
        $case16=new \App\Models\Case();
        $case16->price=89.99;
        $case16->brand='nzxt';
        $case16->model='s340_elite';
        $case16->form_factor='atx_mid_tower';
        $case16->color='white';
        $case16->include_power='no';
        $case16->mobo_comp='atx, micro_atx, mini_itx';
        $case16->front_panel_usb='yes';
        $case16->save();
        
        $case17=new \App\Models\Case();
        $case17->price=162.86;
        $case17->brand='corsair';
        $case17->model='crystal_570x_rgb';
        $case17->form_factor='atx_mid_tower';
        $case17->color='black';
        $case17->include_power='no';
        $case17->mobo_comp='atx, micro_atx, mini_itx';
        $case17->front_panel_usb='yes';
        $case17->save();
        
        $case18=new \App\Models\Case();
        $case18->price=79.99;
        $case18->brand='fractal_design';
        $case18->model='define_mini_c_with_window';
        $case18->form_factor='micro_atx_mid_tower';
        $case18->color='black';
        $case18->include_power='no';
        $case18->mobo_comp='micro_atx, mini_itx';
        $case18->front_panel_usb='yes';
        $case18->save();
        
        $case19=new \App\Models\Case();
        $case19->price=179.99;
        $case19->brand='phanteks';
        $case19->model='enthoo_evolve_atx_glass';
        $case19->form_factor='atx_mid_tower';
        $case19->color='black';
        $case19->include_power='no';
        $case19->mobo_comp='atx, micro_atx, mini_itx';
        $case19->front_panel_usb='yes';
        $case19->save();
        
        $case20=new \App\Models\Case();
        $case20->price=85.98;
        $case20->brand='phanteks';
        $case20->model='eclipse_p400_tempered_glass';
        $case20->form_factor='atx_mid_tower';
        $case20->color='black';
        $case20->include_power='no';
        $case20->mobo_comp='atx, eatx, micro_atx, mini_itx';
        $case20->front_panel_usb='yes';
        $case20->save();
    }
}
