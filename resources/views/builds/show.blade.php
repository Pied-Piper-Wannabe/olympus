@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
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
					<img src="/images/uploads/01.jpg" alt="01">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			@if($build->name === null)
			<h2>Build created on: {{$build->created_at}}</h2>
			@else
			<h2>{{$build->name}}</h2>
			@endif
			<h3>By: <a href="/account/{{$build->created_by}}">{{$build->user->name}}</a></h3>

			<h4>Description:</h4>
			@if($build->description === null)
			<p>No Description</p>
			@else
			<p>{{$build->description}}</p>
			@endif
			<h3>Specs:</h3>
			<div class="list-group">
				<!-- motherboard -->
				@if($build->motherboard === null)
				<a href="/parts/motherboard/" class="list-group-item list-group-item-action"><span class="bold">Motherboard:</span>Empty</a>
				@else
				<a href="/parts/motherboard/{{$build->motherboard}}" class="list-group-item list-group-item-action"><span class="bold">Motherboard:</span>{{$build->motherboardExtract->brand}} {{$build->motherboardExtract->model}}</a>
				@endif
				
				<!-- CPU -->
				@if($build->cpu === null)
				<a href="/parts/cpu/" class="list-group-item list-group-item-action"><span class="bold">CPU:</span>Empty</a>
				@else
				<a href="/parts/cpu/{{$build->cpu}}" class="list-group-item list-group-item-action"><span class="bold">CPU:</span>{{$build->cpuExtract->brand}} {{$build->cpuExtract->model}}</a>
				@endif
				
				<!-- GPU -->
				@if($build->gpu === null)
				<a href="/parts/gpu/" class="list-group-item list-group-item-action"><span class="bold">GPU:</span>Empty</a>
				@else
				<a href="/parts/gpu/{{$build->gpu}}" class="list-group-item list-group-item-action"><span class="bold">GPU:</span>{{$build->gpuExtract->brand}} {{$build->gpuExtract->model}}</a>
				@endif
				
				<!-- RAM -->
				@if($build->ram === null)
				<a href="/parts/memory/" class="list-group-item list-group-item-action"><span class="bold">RAM:</span>Empty</a>
				@else
				<a href="/parts/memory/{{$build->ram}}" class="list-group-item list-group-item-action"><span class="bold">RAM:</span>{{$build->ramExtract->brand}} {{$build->ramExtract->model}}</a>
				@endif
				
				<!-- PSU -->
				@if($build->psu === null)
				<a href="/parts/power-supply/" class="list-group-item list-group-item-action"><span class="bold">PSU:</span>Empty</a>
				@else
				<a href="/parts/power-supply/{{$build->psu}}" class="list-group-item list-group-item-action"><span class="bold">PSU:</span>{{$build->psuExtract->brand}} {{$build->psuExtract->model}}</a>
				@endif
				
				<!-- CPU COOLER -->
				@if($build->cpu_cooler === null)
				<a href="/parts/cpu-cooler/" class="list-group-item list-group-item-action"><span class="bold">CPU Cooler:</span>Empty</a>
				@else
				<a href="/parts/cpu-cooler/{{$build->cpu_cooler}}" class="list-group-item list-group-item-action"><span class="bold">CPU Cooler:</span>{{$build->cpuCoolerExtract->brand}} {{$build->cpuCoolerExtract->model}}</a>
				@endif
				
				<!-- HDD -->
				@if($build->hdd === null)
				<a href="/parts/storage/" class="list-group-item list-group-item-action"><span class="bold">HDD:</span>Empty</a>
				@else
				<a href="/parts/storage/{{$build->hdd}}" class="list-group-item list-group-item-action"><span class="bold">HDD:</span>{{$build->hddExtract->brand}} {{$build->hddExtract->model}}</a>
				@endif
				
				<!-- Case -->
				@if($build->case === null)
				<a href="/parts/case/" class="list-group-item list-group-item-action"><span class="bold">Case:</span>Empty</a>
				@else
				<a href="/parts/case/{{$build->case}}" class="list-group-item list-group-item-action"><span class="bold">Case:</span>{{$build->caseExtract->brand}} {{$build->caseExtract->model}}</a>
				@endif
				
				<!-- OS -->
				@if($build->operating_system === null)
				<a href="/parts/operating-system/" class="list-group-item list-group-item-action"><span class="bold">OS:</span>Empty</a>
				@else
				<a href="/parts/operating-system/{{$build->operating_system}}" class="list-group-item list-group-item-action"><span class="bold">OS:</span>{{$build->osExtract->brand}} {{$build->osExtract->model}}</a>
				@endif

			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Comments:</h3>
		</div>
	</div>
</div>

@stop