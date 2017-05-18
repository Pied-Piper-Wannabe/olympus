<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
use Input;
use Auth;
use Cookie;

class BuildsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$builds = \App\Models\Builds::orderBy('created_at', 'desc')->paginate(10);

		$data = array(
			'builds' => $builds);

		return view('builds/index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		if (!Auth::check()) {
			flash('Please login or register!')->error();
			return view('auth/login');
		}

		$loggedInUser = Auth::user()->id;
		$builds = \App\Models\Builds::where('created_by', $loggedInUser)->orderBy('created_at', 'desc')->get();

		$data = array( 
			'user' => $loggedInUser,
			'builds' => $builds);

		// Ask user if they want to create a new build or edit existing
		return view('builds/create', $data);
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
	public function show(Request $request, $id)
	{
		$value = $request->cookie('keep_build');

		if (Auth::check()) {
			$loggedInUser = Auth::user()->id;
		}else{
			$loggedInUser = "";
		}

		$build = \App\Models\Builds::findOrFail($id);

		$data = array(
			'user' => $loggedInUser,
			'build' => $build);


		return view('builds/show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		// $request->session()->put('key', 'value');
		// Use request to determine which build to edit

		dd($id);


		// $build = \App\Models\Builds::where('created_by', $user)->orderBy('created_at', 'desc')->first();
		// if($build === null) {
		// 	$newBuild = new \App\Models\Builds();
		// 	$newBuild->created_by = $user;
		// 	$newBuild->save();
		// }

		// //Use cookie to find current build ID
		// $build = \App\Models\Builds::where('created_by', $user)->orderBy('created_at', 'desc')->first();
		// $total = 0;
		// $compatable = 'clean';
		// $compatabilityErrors = [];

		// //==========COMPATABILITY CHECK===========
		
		// if($build->cpu !== null){
		// 	$total += $build->cpuExtract->price;// Price Check
		// }
		// if($build->cpu_cooler !== null){
		// 	$total += $build->cpuCoolerExtract->price;// Price Check
		// }
		// //Primary Check
		// if($build->motherboard !== null){
		// 	$total += $build->motherboardExtract->price;// Price Check

		// 	//CPU CHECK
		// 	if($build->cpu !== null){
		// 		if(trim($build->motherboardExtract->cpu_socket) !== trim($build->cpuExtract->socket_type)){
		// 			$compatable = 'NOT COMPATABLE';
		// 			array_push($compatabilityErrors, 'CPU and Motherboard sockets do not match!');
		// 		}
		// 	}

		// 	//CPU COOLER CHECK
		// 	if($build->cpu_cooler !== null){
		// 	  $sockets = explode(", ", $build->cpuCoolerExtract->sockets);
		// 	  $compatable = 'NOT COMPATABLE';
		// 	  array_push($compatabilityErrors, 'CPU/Motherboard and CPU Cooler sockets do not match!');
		// 	  foreach ($sockets as $socket) {
		// 		if(trim($build->motherboardExtract->cpu_socket) === trim($socket)) {
		// 			$compatable = 'clean';
		// 			array_pop($compatabilityErrors);
		// 			break;
		// 		}
		// 	  } 
		// 	}

		// 	//Case to MOBO check
		// 	if($build->case !== null){
		// 		$factors = explode(", ", $build->caseExtract->mobo_comp);
		// 		$compatable = 'NOT COMPATABLE';
		// 	  array_push($compatabilityErrors, 'Motherboard and Case form factors do not match!');
		// 	  // dd($build->motherboardExtract->form_factor);
		// 	  foreach ($factors as $factor) {
		// 		if(trim($build->motherboardExtract->form_factor) === trim($factor)) {
		// 			$compatable = 'clean';
		// 			array_pop($compatabilityErrors);
		// 			break;
		// 		}
		// 	  }
		// 	}


		// 	// Memory to MOBO check
		// 	if($build->ram !== null){
		// 		// Number of sticks check
		// 		if(trim($build->ramExtract->number_of_sticks) > trim($build->motherboardExtract->memory_slots)){
		// 			$compatable = 'NOT COMPATABLE';
		// 		array_push($compatabilityErrors, 'There are more RAM sticks than avalabile slots on Motherboard');
		// 		}

		// 		// Ram Type Check
		// 		if(strpos(trim($build->motherboardExtract->memory_type), trim($build->ramExtract->type)) === false){
		// 			$compatable = 'NOT COMPATABLE';
		// 		array_push($compatabilityErrors, 'RAM is not compatable with Motherboard');
		// 		}

		// 		// RAM Total Size Check
		// 		if(trim($build->ramExtract->size) > trim($build->motherboardExtract->max_memory)){
		// 			$compatable = 'NOT COMPATABLE';
		// 		array_push($compatabilityErrors, 'RAM is over capacity for Motherboard');
		// 		}

		// 		// RAM Pin Check
		// 		if(trim($build->ramExtract->memory_slot_type) !== trim($build->motherboardExtract->memory_pin)){
		// 			$compatable = 'NOT COMPATABLE';
		// 		array_push($compatabilityErrors, 'RAM pin types do not match');
		// 		}
		// 	}
		// }

		// if($build->ram !== null){
		// 	$total += $build->ramExtract->price;// Price Check
		// }
		// if($build->hdd !== null){
		// 	$total += $build->hddExtract->price;// Price Check
		// }
		// if($build->gpu !== null){
		// 	$total += $build->gpuExtract->price;// Price Check
		// }
		// if($build->case !== null){
		// 	$total += $build->caseExtract->price;// Price Check
		// }
		// if($build->psu !== null){
		// 	$total += $build->psuExtract->price;// Price Check
		// }
		// if($build->operating_system !== null){
		// 	$total += $build->osExtract->price;// Price Check
		// }
		// if($build->misc !== null){
		// 	$total += $build->miscExtract->price;// Price Check
		// }

		// // =========END PRICE/COMPATABILITY CHECKS==========

		


		// $data = array(
		// 		'user' => $user,
		// 		'total' => $total,
		// 		'compatable' => $compatable,
		// 		'compatabilityErrors' => $compatabilityErrors,
		// 		'build' => $build);
		// 	return view('builds/create', $data);
		
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

	public function new()
	{
		dd('madeit');
		if (!Auth::check()) {
			flash('Please login or register!')->error();
			return view('auth/login');
		}

		$loggedInUser = Auth::user()->id;

		$newBuild = new \App\Models\Builds();
		$newBuild->created_by = $loggedInUser;
		$newBuild->save();

		$id = $newBuild->id;
		

		return view('/');
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
