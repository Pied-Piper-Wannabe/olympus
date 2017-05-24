@extends('layouts.master')

@section('content')
<div class="container botMarginLg">
	<div class="row">
		<div class="col-md-3 col-sm-12">
			@if($user->photo === null)
			<img src="/images/users/01.jpeg" alt="profile photo">
			@else
			<img src="/images/uploads/users/{{$user->photo}}" alt="profile photo">
			@endif
			<h4 class="bold">{{$user->name}}</h4>
		</div>
		<div class="col-md-9 col-sm-12">
			<!-- Tab Menu -->
			<ul class="nav nav-tabs" id="tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#">Builds</a>
				</li>
			</ul>
			<!-- Tab Content -->
			<div class="row topMarginSm">
				<div class="col-sm-12 table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Created On</th>
								<th>Last Updated</th>
								<th>CPU</th>
								<th>GPU</th>
							</tr>
						</thead>
						<tbody>
							@foreach($builds as $build)
							<tr>
								@if($build->name === null)
								<th scope="row"><a href="/builds/{{$build->id}}">{{$build->id}}</a></th>
								@else
								<th scope="row"><a href="/builds/{{$build->id}}">{{$build->name}}</a></th>
								@endif
								<td>{{$build->created_at}}</td>
								<td>{{$build->updated_at}}</td>
								@if($build->cpu === null)
								<td>Empty</td>
								@else
								<td>{{$build->cpu}}</td>
								@endif
								@if($build->gpu === null)
								<td>Empty</td>
								@else
								<td>{{$build->gpu}}</td>
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
					{!! $builds->render() !!}
				</div>
			</div>

		</div>
	</div>
</div>

@stop
