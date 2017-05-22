@extends('layouts.master')

@section('cover')
<div class="fpCover">
	<div class="fpCoverText">
		<h1>Olympus</h1>
		<h2>PC Builder</h2>
	</div>
</div>

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
			<h2 class="centerText">Most Recent</h2>
		</div>
	</div>
	<div class="row topMarginSm">
		@foreach($builds as $build)
		<div class="col-md-6 col-sm-12">
			<div class="buildBanner">
				@if($build->price < 500.00)
				<h3>Demigod</h3>
				@elseif($build->price > 500.00 and $build->price < 1500.00)
				<h3>Olympian</h3>
				@elseif($build->price > 1500.00)
				<h3>Titan</h3>
				@endif
			</div>
			<div class="buildTile">
				<div class="imageBox">
					<div class="votesBox">
						<p class="votes">{{$build->price}}</p>
					</div>
					<a href="/builds/{{$build->id}}"><img src="/images/uploads/04.jpg" alt="04"></a>
				</div>
				@if($build->name === null)
				<h3>Build Created On {{$build->created_at}}</h3>
				@else
				<h3>{{$build->name}}</h3>
				@endif
				<p>By: <a href="/account/{{$build->user->id}}">{{$build->user->name}}</a></p>
			</div>
		</div>
		@endforeach
	</div>
	<div class="row">
		<div class="col-sm-12 centerText botMarginSm">
			<a class="btn btn-outline-primary btn-black" href="/builds" role="button">View More</a>
		</div>
	</div>
</div>

@stop