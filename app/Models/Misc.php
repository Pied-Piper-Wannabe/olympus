<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Misc extends Model
{
    protected $table = 'misc';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
