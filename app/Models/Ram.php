<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
  protected $table = 'ram';

  public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
