@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12 userPhoto centerText">
			<h1>Edit Account</h1>
			<img src="/images/users/01.jpeg" alt="user01">
		</div>
		<div class="col-sm-12">
			<form action="{{ action ('AccountsController@store') }}" method="POST">
			{!! csrf_field() !!}
				<div class="form-group">
			    <label for="username">Username</label>
			    <input name="name" type="text" class="form-control" id="username" value="{{$user->name}}">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input name="email" type="email" class="form-control" id="email" value="{{$user->email}}">
			  </div>
			  <input type="hidden" name="user" value="{{$user->id}}">
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@stop 