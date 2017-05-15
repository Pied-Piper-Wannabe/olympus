@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<img src="/images/users/01.jpeg" alt="User Profile">
			<h4 class="bold">DOGE USER WOW</h4>	
			<p>I am DOGE. Very wow. Such dog. I build. Lights! For Doge is king. Doge is god. Such needs. Very dog.</p>
		</div>
		<div class="col-md-9 col-sm-12">
			<!-- Tab Menu -->
			<ul class="nav nav-tabs" id="tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#">Builds</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Reviews</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Comments</a>
				</li>
			</ul>
			<!-- Tab Content -->
			<div class="row topMarginSm">
				<div class="col-md-6 col-sm-12 boxGridPadding">
					<div class="border">
						<h4>Build 1</h4>
						<p>This is my primary build</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 boxGridPadding">
					<div class="border">
						<h4>Build 2</h4>
						<p>This is my secondary build</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

@stop