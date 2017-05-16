<!DOCTYPE html>
<html class="blackBackground" lang="en">
	<head>
		@include('partials.head')
	</head>
	<body class="blackBackground">
	@yield('cover')
	
	@include('partials.navbar')

	@include('flash::message')

	@yield('content')

	@include('partials.footer')
	
	@include('partials.scripts')
	</body>
</html>