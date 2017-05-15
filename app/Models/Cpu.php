<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $table = 'cpu';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
