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
						<th scope="row"><a href="#">CPU</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose a CPU</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">CPU Cooler</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose a CPU Cooler</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Motherboard</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose a Motherboard</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Memory</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose Memory </a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Storage</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose Storage</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Video Card</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose a Video Card</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Case</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose a Case</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Power Supply</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose a Power Supply</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Optical Drive</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose an Optical Drive</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Operating System</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose an Operating System</a></td>
						<td>$0.00</td>
					</tr>
					<tr>
						<th scope="row"><a href="#">Misc</a></th>
						<td><a class="btn btn-primary btn-sm" href="#" role="button">Choose Misc</a></td>
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