<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parts extends Model
{
	protected $table = 'parts';

  public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
