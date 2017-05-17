@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12 centerText">
			<h1>{{strtoupper($part->brand)}} {{strtoupper($part->model)}}</h1>
			<h3>${{$part->price}}</h3>
		</div>
		<div class="col-sm-12 centerText">
			<img class="showImgMax" src="http://core0.staticworld.net/images/article/2016/12/corei7front-100701359-orig.jpg" alt="">
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-sm-12">
			<h3>SPECIFICATIONS</h3>

			<!-- Cases -->
			@if($type === 'Cases')
			<div class="spec">
				<h5>FORM FACTOR</h5>
				<p>{{$part->form_factor}}</p>
			</div>
			<div class="spec">
				<h5>INCLUDES POWER SUPPLY</h5>
				<p>{{$part->include_power}}</p>
			</div>
			<div class="spec">
				<h5>MOTHERBOARD COMPATABILITY</h5>
				<p>{{$part->mobo_comp}}</p>
			</div>
			<div class="spec">
				<h5>FRONT PANEL USB</h5>
				<p>{{$part->front_panel_usb}}</p>
			</div>
			<div class="spec">
				<h5>COLOR</h5>
				<p>{{$part->color}}</p>
			</div>
			@endif

			<!-- CPU COOLERS -->
			@if($type === 'CPU Coolers')
			<div class="spec">
				<h5>LIQUID COOLED</h5>
				<p>{{$part->liquid_cooled}}</p>
			</div>
			<div class="spec">
				<h5>COMPATABLE SOCKETS</h5>
				<p>{{$part->sockets}}</p>
			</div>
			<div class="spec">
				<h5>RADIATOR SIZE</h5>
				@if($part->radiator_size === 'none')
				<p>N/A</p>
				@else
				<p>{{$part->radiator_size}}</p>
				@endif
			</div>
			<div class="spec">
				<h5>NOISE</h5>
				<p>{{$part->noise_level}}</p>
			</div>
			<div class="spec">
				<h5>FAN RPM</h5>
				<p>{{$part->fan_rpm}}</p>
			</div>
			<div class="spec">
				<h5>HEIGHT</h5>
				@if($part->height === 'none')
				<p>N/A</p>
				@else
				<p>{{$part->height}}</p>
				@endif
			</div>
			@endif

			<!-- CPUs -->
			@if($type === 'CPUs')
			<div class="spec">
				<h5>DATA WIDTH</h5>
				<p>{{$part->data_width}}</p>
			</div>
			<div class="spec">
				<h5>SOCKET TYPE</h5>
				<p>{{$part->socket_type}}</p>
			</div>
			<div class="spec">
				<h5>NUMBER OF CORES</h5>
				<p>{{$part->number_of_cores}}</p>
			</div>
			<div class="spec">
				<h5>OPERATING FREQUENCY</h5>
				<p>{{$part->operating_frequency}}</p>
			</div>
			<div class="spec">
				<h5>MAX TURBO FREQUENCY</h5>
				<p>{{$part->max_turbo_frequency}}</p>
			</div>
			<div class="spec">
				<h5>L1 CACHE</h5>
				<p>{{$part->l1_cache}}</p>
			</div>
			<div class="spec">
				<h5>L2 CACHE</h5>
				<p>{{$part->l2_cache}}</p>
			</div>
			<div class="spec">
				<h5>L3 CACHE</h5>
				<p>{{$part->l3_cache}}</p>
			</div>
			<div class="spec">
				<h5>WATTAGE</h5>
				<p>{{$part->wattage}}</p>
			</div>
			<div class="spec">
				<h5>HYPERTHREADING</h5>
				<p>{{$part->hyperthreading_support}}</p>
			</div>
			<div class="spec">
				<h5>MAX SUPPORTED MEMORY</h5>
				<p>{{$part->max_supported_memory}}</p>
			</div>
			<div class="spec">
				<h5>INTERGRATED GRAPHICS</h5>
				<p>{{$part->intergrated_graphics}}</p>
			</div>
			@endif

			<!-- GPUs -->
			@if($type === 'GPUs')
			<div class="spec">
				<h5>INTERFACE</h5>
				<p>{{$part->interface}}</p>
			</div>
			<div class="spec">
				<h5>SOCKET TYPE</h5>
				<p>{{$part->socket_type}}</p>
			</div>
			<div class="spec">
				<h5>NUMBER OF CORES</h5>
				<p>{{$part->number_of_cores}}</p>
			</div>
			<div class="spec">
				<h5>OPERATING FREQUENCY</h5>
				<p>{{$part->operating_frequency}}</p>
			</div>
			<div class="spec">
				<h5>MAX TURBO FREQUENCY</h5>
				<p>{{$part->max_turbo_frequency}}</p>
			</div>
			<div class="spec">
				<h5>L1 CACHE</h5>
				<p>{{$part->l1_cache}}</p>
			</div>
			<div class="spec">
				<h5>L2 CACHE</h5>
				<p>{{$part->l2_cache}}</p>
			</div>
			<div class="spec">
				<h5>L3 CACHE</h5>
				<p>{{$part->l3_cache}}</p>
			</div>
			<div class="spec">
				<h5>WATTAGE</h5>
				<p>{{$part->wattage}}</p>
			</div>
			<div class="spec">
				<h5>HYPERTHREADING</h5>
				<p>{{$part->hyperthreading_support}}</p>
			</div>
			<div class="spec">
				<h5>MAX SUPPORTED MEMORY</h5>
				<p>{{$part->max_supported_memory}}</p>
			</div>
			<div class="spec">
				<h5>INTERGRATED GRAPHICS</h5>
				<p>{{$part->intergrated_graphics}}</p>
			</div>
			@endif



		</div>



		<div class="col-md-6 col-sm-12">
			<h3>REVIEWS</h3>
		</div>
	</div>

</div>

@stop