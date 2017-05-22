@extends('layouts.master')

@section('content')
<div class="ascendParallax">
  <div class="ascendCoverText">
    <h1>ASCEND</h1>
  </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Builds:</h1>
		</div>
		<div class="col-md-6 col-sm-12 botMarginSm">
			<div>
				<img src="/images/terryCrews.jpg" alt="Terry Crews">
				<h4>Create New Build</h4>
				<a class="btn btn-primary btn-block" href="/builds/new" role="button">Create New</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-12 botMarginSm">
			<div>
				<img src="/images/ibm5100.png" alt="">
				<h4>Choose From Your Existing Builds</h4>
				<div class="dropdown">
				  <button class="btn btn-info btn-block dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Edit Existing
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				  	@foreach($builds as $build)
				  		@if($build->name === null)
				  		<a class="dropdown-item" href="/builds/{{$build->id}}/edit">Build created on: {{$build->created_at}}</a>
				  		@else
							<a class="dropdown-item" href="/builds/{{$build->id}}/edit">{{$build->name}}</a>
							@endif
						@endforeach
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop


