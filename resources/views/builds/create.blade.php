@extends('layouts.master')

@section('content')
<div class="parallax">
	<div class="createCoverText">
		<h1>Build Your PC</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div id="tourBox" class="col-sm-12 centerText border">
			<p>Need Help? <a href="/builds/tour">Take the tour!</a> or checkout finished <a href="/builds">builds.</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			@if($compatable === 'clean')
			<p><span class="compGreen">Compatability Check</span>: {{$compatable}}</p>
			@elseif($compatable === 'warning')
			<p><span class="compYellow">Compatability Check</span>: {{$compatable}}</p>
			@elseif($compatable === 'NOT COMPATABLE')
			<p><span class="compRed">Compatability Check</span>: {{$compatable}}</p>
			@endif

			@if($compatable !== 'clean')
				@foreach($compatabilityErrors as $compatabilityError)
				<p>{{$compatabilityError}}</p>
				@endforeach
			@endif
		</div>
		<div class="col-sm-12">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Component</th>
						<th>Selection</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<!-- CPU -->
					@if($build->cpu === null)
					<tr>
						<th scope="row"><a href="/parts/cpu">CPU</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/cpu" role="button">Choose a CPU</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/cpu">CPU</a></th>
						<td><a href="/parts/cpu/{{$build->cpu}}">{{$build->cpuExtract->brand}} {{$build->cpuExtract->model}}</a></td>
						<td>${{$build->cpuExtract->price}}</td>
					</tr>
					@endif
					
					<!-- CPU COOLER -->
					@if($build->cpu_cooler === null)
					<tr>
						<th scope="row"><a href="/parts/cpu-cooler">CPU Cooler</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/cpu-cooler" role="button">Choose a CPU Cooler</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/cpu-cooler">CPU Cooler</a></th>
						<td><a href="/parts/cpu-cooler/{{$build->cpu_cooler}}">{{$build->cpuCoolerExtract->brand}} {{$build->cpuCoolerExtract->model}}</a></td>
						<td>${{$build->cpuCoolerExtract->price}}</td>
					</tr>
					@endif

					<!-- MOTHERBOARD -->
					@if($build->motherboard === null)
					<tr>
						<th scope="row"><a href="/parts/motherboard">Motherboard</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/motherboard" role="button">Choose a Motherboard</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/motherboard/">Motherboard</a></th>
						<td><a href="/parts/motherboard/{{$build->motherboard}}">{{$build->motherboardExtract->brand}} {{$build->motherboardExtract->model}}</a></td>
						<td>${{$build->motherboardExtract->price}}</td>
					</tr>
					@endif

					<!-- MEMORY -->
					@if($build->ram === null)
					<tr>
						<th scope="row"><a href="/parts/memory">Memory</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/memory" role="button">Choose Memory </a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/memory/">Memory</a></th>
						<td><a href="/parts/memory/{{$build->ram}}">{{$build->ramExtract->brand}} {{$build->ramExtract->model}}</a></td>
						<td>${{$build->ramExtract->price}}</td>
					</tr>
					@endif

					<!-- STORAGE -->
					@if($build->hdd === null)
					<tr>
						<th scope="row"><a href="/parts/storage">Storage</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/storage" role="button">Choose Storage</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/storage/">Storage</a></th>
						<td><a href="/parts/storage/{{$build->hdd}}">{{$build->hddExtract->brand}} {{$build->hddExtract->model}}</a></td>
						<td>${{$build->hddExtract->price}}</td>
					</tr>
					@endif

					<!-- VIDEO CARD -->
					@if($build->gpu === null)
					<tr>
						<th scope="row"><a href="/parts/gpu">Video Card</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/gpu" role="button">Choose a Video Card</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/gpu/">Video Card</a></th>
						<td><a href="/parts/gpu/{{$build->gpu}}">{{$build->gpuExtract->brand}} {{$build->gpuExtract->model}}</a></td>
						<td>${{$build->gpuExtract->price}}</td>
					</tr>
					@endif

					<!-- CASE -->
					@if($build->case === null)
					<tr>
						<th scope="row"><a href="/parts/case">Case</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/case" role="button">Choose a Case</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/case/">Case</a></th>
						<td><a href="/parts/case/{{$build->case}}">{{$build->caseExtract->brand}} {{$build->caseExtract->model}}</a></td>
						<td>${{$build->caseExtract->price}}</td>
					</tr>
					@endif

					<!-- POWER SUPPLY -->
					@if($build->psu === null)
					<tr>
						<th scope="row"><a href="/parts/power-supply">Power Supply</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/power-supply" role="button">Choose a Power Supply</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/power-supply/">Power Supply</a></th>
						<td><a href="/parts/power-supply/{{$build->psu}}">{{$build->psuExtract->brand}} {{$build->psuExtract->model}}</a></td>
						<td>${{$build->psuExtract->price}}</td>
					</tr>
					@endif

					<!-- OPERATING SYSTEM -->
					@if($build->operating_system === null)
					<tr>
						<th scope="row"><a href="/parts/operating-system">Operating System</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/operating-system" role="button">Choose an Operating System</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/operating-system/">Operating System</a></th>
						<td><a href="/parts/operating-system/{{$build->operating_system}}">{{$build->osExtract->brand}} {{$build->osExtract->model}}</a></td>
						<td>${{$build->osExtract->price}}</td>
					</tr>
					@endif
						
					<!-- MISC -->
					@if($build->misc === null)
					<tr>
						<th scope="row"><a href="/parts/misc">Misc</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/misc" role="button">Choose Misc</a></td>
						<td>$0.00</td>
					</tr>
					@else
					<tr>
						<th scope="row"><a href="/parts/misc/">Misc</a></th>
						<td><a href="/parts/misc/{{$build->misc}}">{{$build->miscExtract->brand}} {{$build->miscExtract->model}}</a></td>
						<td>${{$build->miscExtract->price}}</td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
		<div class="col-sm-12 rightText">
			<h4>Total: ${{$total}}</h4>
		</div>
	</div>
</div>

@stop