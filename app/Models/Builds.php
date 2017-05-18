<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Builds extends Model
{
	protected $table = 'builds';

	public function motherboardExtract() {
		return $this->belongsTo('App\Models\Motherboard', 'motherboard');
	}

	public function caseExtract() {
		return $this->belongsTo('App\Models\ComputerCase', 'case');
	}

	public function cpuExtract() {
		return $this->belongsTo('App\Models\Cpu', 'cpu');
	}

	public function cpuCoolerExtract() {
		return $this->belongsTo('App\Models\CpuCooler', 'cpu_cooler');
	}

	public function gpuExtract() {
		return $this->belongsTo('App\Models\Gpu', 'gpu');
	}

	public function hddExtract() {
		return $this->belongsTo('App\Models\Hdd', 'hdd');
	}

	public function miscExtract() {
		return $this->belongsTo('App\Models\Misc', 'misc');
	}

	public function osExtract() {
		return $this->belongsTo('App\Models\Os', 'operating_system');
	}

	public function psuExtract() {
		return $this->belongsTo('App\Models\Psu', 'psu');
	}

	public function ramExtract() {
		return $this->belongsTo('App\Models\Ram', 'ram');
	}

	public function user()
	{
    return $this->belongsTo('App\User', 'created_by');
	}
}
