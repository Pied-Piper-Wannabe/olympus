@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
	<!-- Sidebar Menu/Filter Menu -->
		<div class="col-md-4 col-lg-3 sideNav">
			<div class="bootstrap-vertical-nav">
				<button class="btn btn-block btn-outline-primary btn-black hidden-md-up" id="filterBtn" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseExample">
					<span class="">Filter</span>
				</button>
				<div class="collapse" id="collapseFilter">
					<h2 class="centerText">Filter</h2>

					<!-- Tier Checks -->
					<h3>Tier</h3>
					<div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Titan
				    </label>
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Olympian
				    </label>
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Demigod
				    </label>
				  </div>

					<!-- Price -->
					<h3>Price: </h3>
				  <div class="form-group">
				    <label for="minPriceBox">Min price:</label>
				    <input type="number" class="form-control" id="minPriceBox" aria-describedby="minPrice" placeholder="min price">
				    <label for="maxPriceBox">Max price:</label>
				    <input type="number" class="form-control" id="maxPriceBox" aria-describedby="maxPrice" placeholder="max price">
				  </div>

					<!-- Card Type -->
				  <h3>GPU</h3>
					<div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      AMD
				    </label>
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Nvidia
				    </label>
				  </div>

				  <h3>CPU</h3>
					<div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Intel
				    </label>
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      AMD
				    </label>
				  </div>
				  <button type="submit" class="btn btn-block btn-outline-primary btn-black">Submit</button>
				</div>
			</div>
		</div>
		<!-- List of builds -->
		<div class="col-md-8 col-lg-9 topMarginSm">
			<div class="row">
				<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
					<h2 class="centerText">All Builds</h2>
				</div>
			</div>
			<div class="row justify-content-end">
				<div class="col-sm-12">
					<div class="dropdown" id="filterDropdown">
				  <button class="btn btn-outline-primary btn-sm dropdown-toggle btn-black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Sort
				  </button>
				  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
				    <a class="dropdown-item" href="#">Most Popular Today</a>
				    <a class="dropdown-item" href="#">Most Popular This Week</a>
				    <a class="dropdown-item" href="#">Most Popular All Time</a>
				    <div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="/builds?sort=newest">Newest</a>
				    <a class="dropdown-item" href="/builds?sort=oldest">Oldest</a>
				    <div class="dropdown-divider"></div>
				    <a class="dropdown-item" href="/builds?sort=expensive">Most Expensive</a>
				    <a class="dropdown-item" href="/builds?sort=least-expensive">Least Expensive</a>
				  </div>
				</div>
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
						<p class="votes">1200</p>
					</div>
					<a href="/builds/{{$build->id}}"><img src="/images/uploads/04.jpg" alt="04"></a>
				</div>
				@if($build->name === null)
				<h3>Build Created On: {{$build->created_at}}</h3>
				@else
				<h3>{{$build->name}}</h3>
				@endif
				<p>By: <a href="/account/{{$build->user->id}}">{{$build->user->name}}</a></p>
			</div>
		</div>
		@endforeach
		<div class="col-sm-12 centerText botMarginSm">
			{!! $builds->render() !!}
		</div>
			</div>
		</div>
	</div>
</div>

@stop