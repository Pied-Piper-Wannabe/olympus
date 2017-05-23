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

					<form class="botMarginSm" action="/builds" method="GET">
						{!! csrf_field() !!}
							<div class="form-group">
								<label for="search">Search</label>
								<input type="text" name="search" class="form-control" id="search" placeholder="search">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Search</button>
						</form>

					<!-- Tier Checks -->
					<form class="botMarginSm" action="/builds" method="GET">
						{!! csrf_field() !!}
					  <fieldset class="form-group">
					    <legend>Tiers</legend>
					    <div class="form-check">
					      <label class="form-check-label">
					      	@if($tier == 'titan')
					        <input type="radio" class="form-check-input" name="tier" id="tier1" value="titan" checked>
					        @else
					        <input type="radio" class="form-check-input" name="tier" id="tier1" value="titan">
					        @endif
					        Titan
					      </label>
					    </div>
					    <div class="form-check">
					    <label class="form-check-label">
					    		@if($tier == 'olympian')
					        <input type="radio" class="form-check-input" name="tier" id="tier2" value="olympian" checked>
					        @else
					        <input type="radio" class="form-check-input" name="tier" id="tier2" value="olympian">
					        @endif
					        Olympian
					      </label>
					    </div>
					    <div class="form-check">
					    <label class="form-check-label">
					    		@if($tier == 'demigod')
					        <input type="radio" class="form-check-input" name="tier" id="tier2" value="demigod" checked>
					        @else
					        <input type="radio" class="form-check-input" name="tier" id="tier2" value="demigod">
					        @endif
					        Demigod
					      </label>
					    </div>  
					  </fieldset>
					  <button type="submit" class="btn btn-block btn-outline-primary btn-black">Submit</button>
					</form>
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
						<p class="votes">${{$build->price}}</p>
					</div>
					@if($build->photo === null)
					<a href="/builds/{{$build->id}}"><img src="/images/terryCrews.jpg" alt="build photo"></a>
					@else
					<a href="/builds/{{$build->id}}"><img src="/images/uploads/builds/{{$build->photo}}" alt="build photo"></a>
					@endif
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