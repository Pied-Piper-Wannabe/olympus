<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Os extends Model
{
    protected $table = 'os';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
