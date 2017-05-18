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
    dd($build);
    // Price Check
    if($build->cpu)
   //  $total = $build->cpuExtract->price 
			// + $build->cpuCoolerExtract->price 
			// + $build->motherboardExtract->price
			// + $build->ramExtract->price
			// + $build->hddExtract->price
			// + $build->gpuExtract->price
			// + $build->caseExtract->price
			// + $build->psuExtract->price
			// + $build->osExtract->price
			// + $build->miscExtract->price

    $data = array(
			'user' => $user,
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
