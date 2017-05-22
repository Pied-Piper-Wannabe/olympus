@extends('layouts.master')

@section('content')

<div class="container botMarginLg">
	<div class="row">
		<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0 userPhoto centerText">
			<h1>Edit Account</h1>
			@if($user->photo === null)
			<img src="/images/users/01.jpeg" alt="profile photo">
			@else
			<img src="/images/uploads/users/{{$user->photo}}" alt="profile photo">
			@endif
		</div>
		<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
			<form action="{{ action ('AccountsController@store') }}" method="POST" enctype="multipart/form-data" novalidate>
			{!! csrf_field() !!}
				<div class="form-group">
			    <label for="username">Username</label>
			    <input name="name" type="text" class="form-control" id="username" value="{{$user->name}}">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input name="email" type="email" class="form-control" id="email" value="{{$user->email}}">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Photo</label>
			    <input type="file" name="image" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
			    <small id="fileHelp" class="form-text text-muted">Max image size: 2MB.</small>
			  </div>
			  <input type="hidden" name="user" value="{{$user->id}}">
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@stop 