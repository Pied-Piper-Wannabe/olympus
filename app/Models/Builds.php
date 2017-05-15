<?php

namespace App\\models;

use Illuminate\Database\Eloquent\Model;

class Builds extends Model
{
	protected $table = 'builds';

	public function motherboard() {
		return $this->belongsTo('App\Models\Motherboard', 'part_id');
	}

	public function case() {
		return $this->belongsTo('App\Models\Case', 'part_id');
	}

	public function cpu() {
		return $this->belongsTo('App\Models\Cpu', 'part_id');
	}

	public function cpuCooler() {
		return $this->belongsTo('App\Models\CpuCooler', 'part_id');
	}

	public function gpu() {
		return $this->belongsTo('App\Models\Gpu', 'part_id');
	}

	public function hdd() {
		return $this->belongsTo('App\Models\Hdd', 'part_id');
	}

	public function misc() {
		return $this->belongsTo('App\Models\Misc', 'part_id');
	}

	public function opticalDrive() {
		return $this->belongsTo('App\Models\OpticalDrive', 'part_id');
	}

	public function os() {
		return $this->belongsTo('App\Models\Os', 'part_id');
	}

	public function psu() {
		return $this->belongsTo('App\Models\Psu', 'part_id');
	}

	public function ram() {
		return $this->belongsTo('App\Models\Ram', 'part_id');
	}
}
