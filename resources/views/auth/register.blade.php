@extends('layouts.dark')

@section('content')
<div id="createAccountVideo">
	<video autoplay muted loop>
	<source src="/assets/videos/createAccountVideo.mp4" type="video/mp4">
	<source src="/assets/videos/createAccountVideo.webm" type="video/webm">
	Your browser does not support the video tag.
	</video>
	<div id="accountCover">
		<h1>SIGN UP</h1>
	</div>
</div>

<div class="container">
	<div class="row botMarginSm">
		<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
			<form class="signupForm" method="POST" action="{{ action ('Auth\AuthController@postRegister') }}" data-validation data-required-message="This field is required">
			{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control inverseInput" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" data-required>
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="name">Username</label>
					<input type="text" class="form-control inverseInput" name="name" id="name" placeholder="Enter username" data-required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control inverseInput" name="password" id="password" placeholder="Password" data-required>
				</div>
				<div class="form-group">
					<label for="verifyPassword">Verify Password</label>
					<input type="password" class="form-control inverseInput" name="password_confirmation" id="password_confirmation" placeholder="Password" data-required>
				</div>
				<button type="submit" class="btn btn-outline-primary btn-black">Signup</button>
				<a href="/login" class="btn btn-outline-primary floatRight btn-black">Go to login</a>
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