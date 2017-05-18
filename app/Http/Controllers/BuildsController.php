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
		return view('builds/index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(Request $request)
	{
		// $cookie = $request->cookie('keep_build');
		// Cookie::queue('keep_build', true);
	
		if (!Auth::check()) {
			flash('Please login or register!')->error();
      return view('auth/login');
    }
    $user = Auth::user()->id;
    $build = \App\Models\Builds::where('created_by', $user)->orderBy('created_at', 'desc')->first();
    if($build === null) {
    	$newBuild = new \App\Models\Builds();
    	$newBuild->created_by = $user;
    	$newBuild->save();
    }
    $build = \App\Models\Builds::where('created_by', $user)->orderBy('created_at', 'desc')->first();
    $total = 0;
    $compatable = 'clean';
    $compatabilityErrors = [];

    //==========COMPATABILITY CHECK===========
    
    if($build->cpu !== null){
    	$total += $build->cpuExtract->price;// Price Check
    }
    if($build->cpu_cooler !== null){
    	$total += $build->cpuCoolerExtract->price;// Price Check
    }
    //Primary Check
    if($build->motherboard !== null){
    	$total += $build->motherboardExtract->price;// Price Check
    	if($build->cpu !== null){
    		if($build->motherboardExtract->cpu_socket !== $build->cpuExtract->socket_type){
    			$compatable = 'NOT COMPATABLE';
    			array_push($compatabilityErrors, 'CPU and Motherboard sockets do not match!');
    		}
    	}
    	if($build->cpu_cooler !== null){
    	  $sockets = explode(", ", $build->cpuCoolerExtract->sockets);
    	  $compatable = 'NOT COMPATABLE';
    	  array_push($compatabilityErrors, 'CPU and CPU Cooler sockets do not match!');
    	  foreach ($sockets as $socket) {
    	  	if($build->motherboardExtract->cpu_socket === $socket) {
    	  		$compatable = 'clean';
    	  		break;
    	  	}
    	  } 
    	}
    }

    if($build->ram !== null){
    	$total += $build->ramExtract->price;// Price Check
    }
    if($build->hdd !== null){
    	$total += $build->hddExtract->price;// Price Check
    }
    if($build->gpu !== null){
    	$total += $build->gpuExtract->price;// Price Check
    }
    if($build->case !== null){
    	$total += $build->caseExtract->price;// Price Check
    }
    if($build->psu !== null){
    	$total += $build->psuExtract->price;// Price Check
    }
    if($build->operating_system !== null){
    	$total += $build->osExtract->price;// Price Check
    }
    if($build->misc !== null){
    	$total += $build->miscExtract->price;// Price Check
    }

    


    $data = array(
			'user' => $user,
			'total' => $total,
			'compatable' => $compatable,
			'compatabilityErrors' => $compatabilityErrors,
			'build' => $build);
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
		dd($value);

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
