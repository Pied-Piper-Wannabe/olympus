<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OpticalDrive extends Model
{
    protected $table = 'optical_drive';

    public function builds()
    {
      return $this->hasMany('App\Models\Builds', 'part_id');
    }
}
