<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
	protected $table = 'hdd';

  public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
