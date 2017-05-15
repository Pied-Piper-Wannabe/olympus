<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    protected $table = 'gpu';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
