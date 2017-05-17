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
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Component</th>
						<th>Selection</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"><a href="/parts/cpu">CPU</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/cpu" role="button">Choose a CPU</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/cpu-cooler">CPU Cooler</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/cpu-cooler" role="button">Choose a CPU Cooler</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/motherboard">Motherboard</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/motherboard" role="button">Choose a Motherboard</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/memory">Memory</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/memory" role="button">Choose Memory </a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/storage">Storage</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/storage" role="button">Choose Storage</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/video-card">Video Card</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/video-card" role="button">Choose a Video Card</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/case">Case</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/case" role="button">Choose a Case</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/power-supply">Power Supply</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/power-supply" role="button">Choose a Power Supply</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/operating-system">Operating System</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/operating-system" role="button">Choose an Operating System</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="/parts/misc">Misc</a></th>
						<td><a class="btn btn-primary btn-sm" href="/parts/misc" role="button">Choose Misc</a></td>
						<td>$0.00</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-sm-12 rightText">
			<h4>Total: $0.00</h4>
		</div>
	</div>
</div>

@stop