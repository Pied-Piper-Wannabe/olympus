@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
	<!-- Sidebar Menu/Filter Menu -->
		<div class="col-md-4 col-lg-3 sideNav">
			<div class="bootstrap-vertical-nav">
				<button class="btn btn-block btn-outline-primary btn-black hidden-md-up" id="filterBtn" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseExample">
					<span class="">Parts</span>
				</button>
				<div class="collapse" id="collapseFilter">
					<h2 class="centerText">Parts</h2>
					<form action="">
						<div class="form-group">
							<label for="search">Search</label>
							<input type="email" class="form-control" id="search" placeholder="search">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Submit</button>
					</form>
					<ul class="nav flex-column topMarginSm">
						<li class="nav-item">
							<a class="nav-link active" href="/parts/cpu">CPU</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/cpu-cooler">CPU Cooler</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/motherboard">Motherboard</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/memory">Memory</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/storage">Storage</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/gpu">GPU</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/case">Case</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/power-supply">Power Supply</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/operating-system">Operating System</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/parts/misc">Misc</a>
						</li>				
					</ul>
				</div>
			</div>
		</div>

<!-- =========================PARTS===================================== -->

		<!-- List of builds -->
		<div class="col-md-8 col-lg-9 topMarginSm">
			<div class="row">
				<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
					<h2 class="centerText">{{ $type }}</h2>
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
						<a class="dropdown-item" href="#">Newest</a>
						<a class="dropdown-item" href="#">Oldest</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Most Expensive</a>
						<a class="dropdown-item" href="#">Least Expensive</a>
					</div>
				</div>
			</div>
				</div>
	<div class="row topMarginSm">
		<div class="col-sm-12 table-responsive">
			<table class="table table-striped">
				<thead>


					<!-- ==========Motherboard Table========= -->
					@if($type === 'Motherboards')
					<tr>
						<th>Motherboard</th>
						<th>Socket</th>
						<th>Form Factor</th>
						<th>RAM Slots</th>
						<th>Max Ram</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/motherboard/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->cpu_socket}}</td>
						<td>{{$part->form_factor}}</td>
						<td>{{$part->memory_slots}}</td>
						<td>{{$part->max_memory}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="motherboard">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========CPU Table========= -->
					@if($type === 'CPUs')
					<tr>
						<th>CPU</th>
						<th>Speed</th>
						<th>Cores</th>
						<th>TDP</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/cpu/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->operating_frequency}}GHz</td>
						<td>{{$part->number_of_cores}} Cores</td>
						<td>{{$part->wattage}}W</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="cpu">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========GPU Table========= -->
					@if($type === 'GPUs')
					<tr>
						<th>Video Card</th>
						<th>Chipset</th>
						<th>Memory</th>
						<th>Core Clock</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/gpu/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->chipset}}</td>
						<td>{{$part->mem_size}}</td>
						<td>{{$part->core_clock}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="gpu">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========RAM Table========= -->
					@if($type === 'Memory')
					<tr>
						<th>RAM</th>
						<th>Speed</th>
						<th>Type</th>
						<th>CAS</th>
						<th>Modules</th>
						<th>Size</th>
						<th>Rating</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/memory/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->type}}-{{$part->speed}}</td>
						<td>{{$part->memory_slot_type}}</td>
						<td>{{$part->CASlatency}}</td>
						<td>{{$part->number_of_sticks}}x{{$part->stick_size}}GB</td>
						<td>{{$part->size}}GB</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="ram">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif
						
					<!-- ==========HDD Table========= -->
					@if($type === 'Storage Devices')
					<tr>
						<th>Storage</th>
						<th>Form</th>
						<th>Type</th>
						<th>Capacity</th>
						<th>Cache</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/storage/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->form_factor}}</td>
						@if($part->rpm === 0)
						<td>SSD</td>
						@else
						<td>{{$part->rpm}}RPM</td>
						@endif
						<td>{{$part->size}}GB</td>
						@if($part->cache === 'none')
						<td>N/A</td>
						@else
						<td>{{$part->cache}}</td>
						@endif
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="hdd">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========PSU Table========= -->
					@if($type === 'PSUs')
					<tr>
						<th>Power Supply</th>
						<th>Form</th>
						<th>Efficiency</th>
						<th>Watts</th>
						<th>Modular</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/power-supply/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->form_factor}}</td>
						<td>{{$part->efficiency}}</td>
						<td>{{$part->max_wattage}}W</td>
						<td>{{$part->moduler}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="psu">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========Case Table========= -->
					@if($type === 'Cases')
					<tr>
						<th>Case</th>
						<th>Type</th>
						<th>Power Supply</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/case/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->form_factor}}</td>
						<td>{{$part->include_power}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="case">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========CPU Cooler========= -->
					@if($type === 'CPU Coolers')
					<tr>
						<th>CPU Cooler</th>
						<th>Fan RPM</th>
						<th>Noise Level</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/cpu-cooler/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->fan_rpm}} RPM</td>
						<td>{{$part->noise_level}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="cooler">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========OS Table========= -->
					@if($type === 'Operating Systems')
					<tr>
						<th>Operating System</th>
						<th>Architecture</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/operating-system/{{$part->id}}">{{$part->brand}} {{$part->model}}</a></th>
						<td>{{$part->architecture}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="os">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

					<!-- ==========Misc Table========= -->
					@if($type === 'Misc')
					<tr>
						<th>Name</th>
						<th>Type</th>
						<th>Rating</th>
						<th>Price</th>
						<th>Button here</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($parts as $part)
					<tr>
						<th scope="row"><a class="bold" href="/parts/misc/{{$part->id}}">{{$part->name}}</a></th>
						<td>{{$part->type}}</td>
						<td>{{$part->noise_level}}</td>
						<td>TBD SOON</td>
						<td class="bold">${{$part->price}}</td>
						<!-- FORM for adding part -->
						<form method="POST" action="/builds">
						{!! csrf_field() !!}
							<input type="hidden" name="type" value="misc">
							<input type="hidden" name="part" value="{{$part->id}}">
							<td><input type="submit" class="btn btn-primary btn-sm" value="Add"></td>
						</form>
					</tr>
					@endforeach
					@endif

				</tbody>
			</table>
			{!! $parts->render() !!}
		</div>
	</div>
</div>

@stop