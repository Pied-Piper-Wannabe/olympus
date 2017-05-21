<?php

//test comment please ignore

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UpvotesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$upvote1 = new \App\Models\Upvotes();
		$upvote1->upvotes = 250;
		$upvote1->build = 1;
		$upvote1->save();

		$upvote2 = new \App\Models\Upvotes();
		$upvote2->upvotes = 2123;
		$upvote2->build = 2;
		$upvote2->save();

		$upvote3 = new \App\Models\Upvotes();
		$upvote3->upvotes = 500;
		$upvote3->build = 3;
		$upvote3->save();
	}
}


