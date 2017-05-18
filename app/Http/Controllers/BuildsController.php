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

    // Price Check
    if($build->cpu !== null){
    	$total += $build->cpuExtract->price;
    }
    if($build->cpu_cooler !== null){
    	$total += $build->cpuCoolerExtract->price;
    }
    if($build->motherboard !== null){
    	$total += $build->motherboardExtract->price;
    }
    if($build->ram !== null){
    	$total += $build->ramExtract->price;
    }
    if($build->hdd !== null){
    	$total += $build->hddExtract->price;
    }
    if($build->gpu !== null){
    	$total += $build->gpuExtract->price;
    }
    if($build->case !== null){
    	$total += $build->caseExtract->price;
    }
    if($build->psu !== null){
    	$total += $build->psuExtract->price;
    }
    if($build->operating_system !== null){
    	$total += $build->osExtract->price;
    }
    if($build->misc !== null){
    	$total += $build->miscExtract->price;
    }

    $data = array(
			'user' => $user,
			'total' => $total,
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
