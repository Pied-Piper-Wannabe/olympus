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
	public function index(Request $request, $type)
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

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Cpu::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'cpu-cooler':
				$type = 'CPU Coolers';
				$parts = \App\Models\CpuCooler::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\CpuCooler::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'motherboard':
				$type = 'Motherboards';
				$parts = \App\Models\Motherboard::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Motherboard::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'memory':
				$type = 'Memory';
				$parts = \App\Models\Ram::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Ram::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'storage':
				$type = 'Storage Devices';
				$parts = \App\Models\Hdd::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Hdd::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'gpu':
				$type = 'GPUs';
				$parts = \App\Models\Gpu::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Gpu::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'case':
				$type = 'Cases';
				$parts = \App\Models\ComputerCase::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\ComputerCase::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'power-supply':
				$type = 'PSUs';
				$parts = \App\Models\Psu::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Psu::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'operating-system':
				$type = 'Operating Systems';
				$parts = \App\Models\Os::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Os::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
				break;
			case 'misc':
				$type = 'Misc';
				$parts = \App\Models\Misc::paginate(10);

				if(Input::has('search')){
					$value= Input::get('search');
					$parts = \App\Models\Misc::where('model', 'like', "%$value%")->orWhere('brand', 'like', "%$value%")->paginate(10);
				}
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
				$part = \App\Models\Cpu::findOrFail($id);
				break;
			case 'cpu-cooler':
				$type = 'CPU Coolers';
				$part = \App\Models\CpuCooler::findOrFail($id);
				break;
			case 'motherboard':
				$type = 'Motherboards';
				$part = \App\Models\Motherboard::findOrFail($id);
				break;
			case 'memory':
				$type = 'Memory';
				$part = \App\Models\Ram::findOrFail($id);
				break;
			case 'storage':
				$type = 'Storage Devices';
				$part = \App\Models\Hdd::findOrFail($id);
				break;
			case 'gpu':
				$type = 'GPUs';
				$part = \App\Models\Gpu::findOrFail($id);
				break;
			case 'case':
				$type = 'Cases';
				$part = \App\Models\ComputerCase::findOrFail($id);
				break;
			case 'power-supply':
				$type = 'PSUs';
				$part = \App\Models\Psu::findOrFail($id);
				break;
			case 'operating-system':
				$type = 'Operating Systems';
				$part = \App\Models\Os::findOrFail($id);
				break;
			case 'misc':
				$type = 'Misc';
				$part = \App\Models\Misc::findOrFail($id);
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
