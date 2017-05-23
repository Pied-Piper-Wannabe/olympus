@extends('layouts.dark')

@section('content')
<div id="createAccountVideo">
	<video autoplay muted loop>
	<source src="/assets/videos/createAccountVideo.mp4" type="video/mp4">
	<source src="/assets/videos/createAccountVideo.webm" type="video/webm">
	Your browser does not support the video tag.
	</video>
	<div id="accountCover">
		<h1>LOG IN</h1>
	</div>
</div>


<div class="container">
	<div class="row botMarginSm">
		<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
			<form class="signupForm" method="POST" action="{{ action ('Auth\AuthController@postLogin') }}" data-validation data-required-message="This field is required">
			{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control inverseInput" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control inverseInput" name="password" id="password" placeholder="Password">
				</div>
				<div class="row">
					<div class="col-sm">
						<input type="checkbox" name="remember"> Remember Me
					</div>
				</div>
				<button type="submit" class="btn btn-outline-primary btn-black">Login</button>
				<a href="/register" class="btn btn-outline-primary floatRight btn-black">Signup</a>
			</form>
		@if (count($errors))
		<ul>
			@foreach($errors->all() as $error)
					<li class="whiteText">{{$error}}</li>
			@endforeach
		</ul>
		@endif
		</div>
	</div>
</div>


@stop