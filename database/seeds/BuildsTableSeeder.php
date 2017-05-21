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

		$build1 = new \App\Models\Builds();
		$build1->name = 'The Beefiest';
		$build1->created_by = 3;
		$build1->description = 'Just one of the beefest modern day gaming computers.';
		$build1->price = 3133.39;
		$build1->motherboard = 1;
		$build1->cpu = 4;
		$build1->gpu = 1;
		$build1->ram = 10;
		$build1->cpu_cooler = 5;
		$build1->hdd = 9;
		$build1->psu = 13;
		$build1->case = 9;
		$build1->operating_system = 1;
		$build1->misc = '1,2';
		$build1->save();

		$build1 = new \App\Models\Builds();
		$build1->name = 'AMD Best';
		$build1->created_by = 3;
		$build1->description = 'AMD for life man.';
		$build1->price = 1457.21;
		$build1->motherboard = 6;
		$build1->cpu = 1;
		$build1->gpu = 3;
		$build1->ram = 4;
		$build1->cpu_cooler = 4;
		$build1->hdd = 5;
		$build1->psu = 7;
		$build1->case = 9;
		$build1->operating_system = 1;
		$build1->misc = '1,2';
		$build1->save();

	}
}


