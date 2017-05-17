<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MiscTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $misc1= new \App\Models\Misc();
        $misc1->price=182.99;
        $misc1->name='gn246hl';
        $misc1->type='monitor';
        $misc1->description=24;
        $misc1->specs='1920x1080, 16:9, 144hz, hdmi, vga, dvi';
        $misc1->manufacturer='acer';
        $misc1->save();

        $misc2= new \App\Models\Misc();
        $misc2->price=229.99;
        $misc2->name='vg248qe';
        $misc2->type='monitor';
        $misc2->description=24;
        $misc2->specs='1920x1080, 16:9, 144hz, hdmi, vga, dvi';
        $misc2->manufacturer='asus';
        $misc2->save();

        $misc3= new \App\Models\Misc();
        $misc3->price=99.49;
        $misc3->name='vs228h-p';
        $misc3->type='monitor';
        $misc3->description=21.5;
        $misc3->specs='1920x1080, 16:9, 5ms, hdmi, vga, dvi'
        $misc3->manufacturer='asus';
        $misc3->save();

        $misc4= new \App\Models\Misc();
        $misc4->price=5104.98;
        $misc4->name='cg318-bk';
        $misc4->type='monitor';
        $misc4->description=31.1;
        $misc4->specs='4096x2160, 256:135, 9ms, hdmi, display port';
        $misc4->manufacturer='eizo';
        $misc4->save();

        $misc5= new \App\Models\Misc();
        $misc5->price=6.30;
        $misc5->name='sickleflow (red)';
        $misc5->type='case fan';
        $misc5->description=120;
        $misc5->specs='translucent/gray, red led, 69.7cfm, 2000rpm';
        $misc5->manufacturer='cooler master';
        $misc5->save();

        $misc6= new \App\Models\Misc();
        $misc6->price=25.99;
        $misc6->name='air series af120 quiet edition';
        $misc6->type='case fan';
        $misc6->description=120;
        $misc6->specs='black, 39.9cfm, 1100rpm';
        $misc6->manufacturer='corsair';
        $misc6->save();

        $misc7= new \App\Models\Misc();
        $misc7->price=17.59;
        $misc7->name='air series af140 quiet edition'
        $misc7->type='case fan';
        $misc7->description=140;
        $misc7->specs='black, 67.8cfm, 1150rpm';
        $misc7->manufacturer='corsair';
        $misc7->save();

        $misc8= new \App\Models\Misc();
        $misc8->price=86.99;
        $misc8->name='aer rgb140(3pack)';
        $misc8->type='case fan';
        $misc8->description=140;
        $misc8->specs='black, multi-color led, 23.9-71.6cfm, 500-1000rpm';
        $misc8->manufacturer='nzxt'
        $misc8->save();

        $misc9= new \App\Models\Misc();
        $misc19->price=87.99;
        $misc9->name='lamptron fc fc5v3 bk';
        $misc9->type='fan controller';
        $misc9->description='6 channels';
        $misc9->specs='30w, supports 4pin fans';
        $misc9->manufacturer='lamptron';
        $misc9->save();

        $misc10= new \App\Models\Misc();
        $misc10->price=46.89;
        $misc10->name='nzxt sentry lx';
        $misc10->type='fan controller';
        $misc10->description='5 channels';
        $misc10->specs='6w, no support(4pin), lcd screen';
        $misc10->manufacturer='nzxt';
        $misc10->save();

        $misc11= new \App\Models\Misc();
        $misc1->price=31.88;
        $misc11->name='nzxt sentry 2';
        $misc11->type='fan controller';
        $misc11->description='5 channels';
        $misc11->specs='10w, no support(4pin), touch screen,';
        $misc11->manufacturer='nzxt';
        $misc11->save();

        $misc12= new \App\Models\Misc();
        $misc12->price=34.49;
        $misc12->name='fpx-003';
        $misc12->type='fan controller';
        $misc12->description='4 channels';
        $misc12->specs='8w, no support(4pin), front all in one 2.0 usb card reader, temp display';
        $misc12->manufacturer='kingwin';
        $misc12->save();

        $misc13= new \App\Models\Misc();
        $misc13->price=6.45;
        $misc13->name='mx4';
        $misc13->type='thermal compound';
        $misc13->description='';
        $misc13->specs='4g';
        $misc13->manufacturer='arctic';
        $misc13->save();

        $misc14= new \App\Models\Misc();
        $misc14->price=7.35;
        $misc14->name='as5-3.5g';
        $misc14->type='thermal compound';
        $misc14->description='5 high density polysynthetic silver';
        $misc14->specs='3.5g';
        $misc14->manufacturer='arctic';
        $misc14->save();

        $misc15= new \App\Models\Misc();
        $misc15->price=33.27;
        $misc15->name='pk-3 nano';
        $misc15->type='thermal compound';
        $misc15->description='';
        $misc15->specs='30g';
        $misc15->manufacturer='prolimatech';
        $misc15->save();

        $misc16= new \App\Models\Misc();
        $misc16->price=114.00;
        $misc16->name='pce-ac88'
        $misc16->type='wireless network adapter';
        $misc16->description='pcie x1';
        $misc16->specs='';
        $misc16->manufacturer='asus';
        $misc16->save();

        $misc17= new \App\Models\Misc();
        $misc17->price=29.99;
        $misc17->name='gc-wb867d-1';
        $misc17->type='wireless network adapter';
        $misc17->description='pcie x1';
        $misc17->specs='';
        $misc17->manufacturer='gigabyte';
        $misc17->save();

        $misc18= new \App\Models\Misc();
        $misc18->price=36.88;
        $misc18->name='tl-wdn4800';
        $misc18->type='wireless network adapter';
        $misc18->description='pcie x1';
        $misc18->specs='';
        $misc18->manufacturer='tp-link';
        $misc18->save();

    }
}
