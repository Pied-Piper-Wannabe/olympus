<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
use Input;
use Auth;

class PartsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index($type)
	{
		if (Auth::check()) {
			$loggedInUser = Auth::user()->id;
		}else{
			$loggedInUser = "";
		}

		switch ($type) {
			case 'cpu':
				$type = 'CPUs';
				$parts = \App\Models\Cpu::paginate(10);
				break;
			case 'cpu-cooler':
				$type = 'CPU Coolers';
				$parts = \App\Models\CpuCooler::paginate(10);
				break;
			case 'motherboard':
				$type = 'Motherboards';
				$parts = \App\Models\Motherboard::paginate(10);
				break;
			case 'memory':
				$type = 'Memory';
				$parts = \App\Models\Ram::paginate(10);
				break;
			case 'storage':
				$type = 'Storage Devices';
				$parts = \App\Models\Hdd::paginate(10);
				break;
			case 'gpu':
				$type = 'GPUs';
				$parts = \App\Models\Gpu::paginate(10);
				break;
			case 'case':
				$type = 'Cases';
				$parts = \App\Models\ComputerCase::paginate(10);
				break;
			case 'power-supply':
				$type = 'PSUs';
				$parts = \App\Models\Psu::paginate(10);
				break;
			case 'operating-system':
				$type = 'Operating Systems';
				$parts = \App\Models\Os::paginate(10);
				break;
			case 'misc':
				$type = 'Misc';
				$parts = \App\Models\Misc::paginate(10);
				break;
		}

		$data = array(
			'type' => $type, 
			'user' => $loggedInUser,
			'parts' => $parts);
		
		return view('parts/index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($type, $id)
	{

		$loggedInUser = "";
    if (Auth::check()) {
        $loggedInUser = Auth::user()->id;
    }

		switch ($type) {
			case 'cpu':
				$type = 'CPUs';
				$parts = \App\Models\Cpu::paginate(10);
				break;
			case 'cpu-cooler':
				$type = 'CPU Coolers';
				break;
			case 'motherboard':
				$type = 'Motherboards';
				$part = \App\Models\Motherboard::findOrFail($id);
				break;
			case 'memory':
				$type = 'Memory';
				break;
			case 'storage':
				$type = 'Storage Devices';
				break;
			case 'gpu':
				$type = 'GPUs';
				break;
			case 'case':
				$type = 'Cases';
				break;
			case 'power-supply':
				$type = 'PSUs';
				break;
			case 'optical-drive':
				$type = 'Optical Drives';
				break;
			case 'operating-system':
				$type = 'Operating Systems';
				break;
			case 'misc':
				$type = 'Misc';
				break;

		}
		$data = array(
			'type' => $type, 
			'user' => $loggedInUser,
			'part' => $part);
		
		return view('parts/show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
