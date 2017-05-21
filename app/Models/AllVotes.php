<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AllVotes extends Model
{

	protected $table = 'all_votes';

  public function build() {
  	return $this->belongsTo('App\Models\Builds', 'build_id');
	}

	public function user() {
  	return $this->belongsTo('App\User', 'build_id');
	}
}
