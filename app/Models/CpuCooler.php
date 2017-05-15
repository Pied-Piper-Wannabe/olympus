<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CpuCooler extends Model
{
    protected $table = 'cpu_cooler';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
