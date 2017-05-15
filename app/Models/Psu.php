<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psu extends Model
{
    protected $table = 'psu';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
