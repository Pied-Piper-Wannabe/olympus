@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
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
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<h2>{{$build->name}}</h2>
			<h3>By: <a href="/account/{{$build->created_by}}">{{$build->user->name}}</a></h3>

			<h4>Description:</h4>
			<p>{{$build->description}}</p>
			<h3>Specs:</h3>
			<div class="list-group">
				<a href="/parts/motherboard/{{$build->motherboard}}" class="list-group-item list-group-item-action"><span class="bold">Motherboard:</span>{{$build->motherboardExtract->brand}} {{$build->motherboardExtract->model}}</a>

				<a href="/parts/cpu/{{$build->cpu}}" class="list-group-item list-group-item-action"><span class="bold">CPU:</span>{{$build->cpuExtract->brand}} {{$build->cpuExtract->model}}</a>

				<a href="/parts/gpu/{{$build->gpu}}" class="list-group-item list-group-item-action"><span class="bold">GPU:</span>{{$build->gpuExtract->brand}} {{$build->gpuExtract->model}}</a>

				<a href="/parts/memory/{{$build->ram}}" class="list-group-item list-group-item-action"><span class="bold">RAM:</span>{{$build->ramExtract->brand}} {{$build->ramExtract->model}}</a>

				<a href="/parts/power-supply/{{$build->psu}}" class="list-group-item list-group-item-action"><span class="bold">PSU:</span>{{$build->psuExtract->brand}} {{$build->psuExtract->model}}</a>

				<a href="/parts/cpu-cooler/{{$build->cpu_cooler}}" class="list-group-item list-group-item-action"><span class="bold">CPU Cooler:</span>{{$build->cpuCoolerExtract->brand}} {{$build->cpuCoolerExtract->model}}</a>

				<a href="/parts/storage/{{$build->hdd}}" class="list-group-item list-group-item-action"><span class="bold">HDD:</span>{{$build->hddExtract->brand}} {{$build->hddExtract->model}}</a>

				<a href="/parts/case/{{$build->case}}" class="list-group-item list-group-item-action"><span class="bold">Case:</span>{{$build->caseExtract->brand}} {{$build->caseExtract->model}}</a>

				<a href="/parts/operating-system/{{$build->operating_system}}" class="list-group-item list-group-item-action"><span class="bold">OS:</span>{{$build->osExtract->brand}} {{$build->osExtract->model}}</a>

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