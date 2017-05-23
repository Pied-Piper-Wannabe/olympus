<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
use Input;
use Auth;

class AccountsController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$loggedInUser = "";
		if (Auth::check()) {
				$loggedInUser = Auth::user();
		}
		$builds = \App\Models\Builds::where('created_by', $loggedInUser->id)->orderBy('created_at', 'desc')->paginate(10);

		$data = array( 
			'user' => $loggedInUser,
			'builds' => $builds);

		return view('accounts/index', $data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('accounts/create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		if (Auth::check()) {
				$loggedInUser = Auth::user();
		}else {
			flash('Please login or register!')->error();
			return view('auth/login');
		}

		if($loggedInUser->id != $request->user) {
			abort(403);
		}else{
			$id = $loggedInUser->id;
		}

		if(Input::get('name') !== null && Input::get('email') !== null) {
			$user = \App\User::findOrFail($id);
			$user->name = Input::get('name');
			$user->email = Input::get('email');

			if($request->hasFile('image')){
				if($request->file('image')->getClientSize() <= 41943040 
						&& ($request->file('image')->getClientOriginalExtension() == 'png' 
								|| $request->file('image')->getClientOriginalExtension() == 'jpg'
								|| $request->file('image')->getClientOriginalExtension() == 'gif'
								|| $request->file('image')->getClientOriginalExtension() == 'jpeg'))
				{
				//change image name
				$imageName =  $user->id . '.' . 
				$request->file('image')->getClientOriginalExtension();
				//Move image to new folder
				$request->file('image')->move(
						base_path() . '/public/images/uploads/users/', $imageName
				);
				//Save image name to server
				$user->photo = $imageName;
				}else{
						return "fail";  // TODO: Change this to a functional error message
				}
			}
			$user->save();
			return redirect()->action('AccountsController@index');
		}else {
			$data = array( 
			'user' => $loggedInUser
			);
			flash('Invalid Username or Email... empty')->error();
			return view('accounts/edit', $data);
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$user = \App\User::findOrFail($id);
		$builds = \App\Models\Builds::where('created_by', $user->id)->orderBy('created_at', 'desc')->paginate(10);

		$data = array( 
			'user' => $user,
			'builds' => $builds
			);

		return view('accounts/show', $data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		if (Auth::check()) {
				$loggedInUser = Auth::user();
		}else {
			flash('Please login or register!')->error();
			return view('auth/login');
		}

		if($loggedInUser->id != $id) {
			abort(403);
		}

		$data = array( 
			'user' => $loggedInUser
			);

		return view('accounts/edit', $data);
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
