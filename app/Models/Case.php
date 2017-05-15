<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Case extends Model
{
    protected $table = 'case';

  public function builds()
  {
    return $this->hasMany('App\Models\Builds', 'part_id');
  }
}
