@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3 col-sm-12 offset-sm-0">
			<a class="btn btn-primary" href="/builds/new" role="button">Create New</a>
			<div class="dropdown">
			  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Edit Existing
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  	@foreach($builds as $build)
						<a class="dropdown-item" href="/builds/{{$build->id}}/edit">{{$build->name}}</a>
					@endforeach
			  </div>
			</div>
		</div>
	</div>
</div>

@stop