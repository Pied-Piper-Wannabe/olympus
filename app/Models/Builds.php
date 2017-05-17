<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Builds extends Model
{
	protected $table = 'builds';

	public function motherboard() {
		return $this->belongsTo('App\Models\Motherboard', 'id');
	}

	public function case() {
		return $this->belongsTo('App\Models\ComputerCase', 'id');
	}

	public function cpu() {
		return $this->belongsTo('App\Models\Cpu', 'id');
	}

	public function cpuCooler() {
		return $this->belongsTo('App\Models\CpuCooler', 'id');
	}

	public function gpu() {
		return $this->belongsTo('App\Models\Gpu', 'id');
	}

	public function hdd() {
		return $this->belongsTo('App\Models\Hdd', 'id');
	}

	public function misc() {
		return $this->belongsTo('App\Models\Misc', 'id');
	}

	public function os() {
		return $this->belongsTo('App\Models\Os', 'id');
	}

	public function psu() {
		return $this->belongsTo('App\Models\Psu', 'id');
	}

	public function ram() {
		return $this->belongsTo('App\Models\Ram', 'id');
	}

	public function user()
	{
    return $this->belongsTo('App\User', 'created_by');
	}
}
