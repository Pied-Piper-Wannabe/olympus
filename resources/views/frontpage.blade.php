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
			<h2 class="centerText">Featured Builds</h2>
		</div>
	</div>
	<div class="row topMarginSm">
		<div class="col-md-6 col-sm-12">
			<div class="buildBanner">
				<h3>Olympian - SubName</h3>
			</div>
			<div class="buildTile">
				<div class="imageBox">
					<div class="votesBox">
						<p class="votes">1200</p>
					</div>
					<img src="/images/uploads/04.jpg" alt="04">
				</div>
				<h3>ABS Intel-Watercooling PS</h3>
				<p>By: <a href="#">KillerGamer12</a></p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="buildBanner">
				<h3>Titan - SubName</h3>
			</div>
			<div class="buildTile">
				<div class="imageBox">
					<div class="votesBox">
						<p class="votes">1200</p>
					</div>
					<img src="/images/uploads/02.jpg" alt="02">
				</div>
				<h3>CryEngine Workstation V3</h3>
				<p>By: <a href="#">PCGOD101</a></p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="buildBanner">
				<h3>Olympian - SubName</h3>
			</div>
			<div class="buildTile">
				<div class="imageBox">
					<div class="votesBox">
						<p class="votes">1200</p>
					</div>
					<img src="/images/uploads/03.jpg" alt="03">
				</div>
				<h3>That Contrast Tho</h3>
				<p>By: <a href="#">IDoThisForALivingGuys</a></p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="buildBanner">
				<h3>Demigod - SubName</h3>
			</div>
			<div class="buildTile">
				<div class="imageBox">
					<div class="votesBox">
						<p class="votes">1200</p>
					</div>
					<img src="/images/uploads/01.jpg" alt="01">
				</div>
				<h3>Compact i3 w/Mech</h3>
				<p>By: <a href="#">LinuxMasterRace</a></p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 centerText botMarginSm">
			<a class="btn btn-outline-primary btn-black" href="/builds" role="button">View More</a>
		</div>
	</div>
</div>

@stop