<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upvotes extends Model
{
		protected $table = 'upvotes';

		public function build() {
			return $this->belongsTo('App\Models\Builds', 'build');
		}
}
