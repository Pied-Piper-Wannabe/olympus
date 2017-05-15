<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
  protected $table = 'motherboard';

  public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
