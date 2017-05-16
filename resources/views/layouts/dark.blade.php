<!DOCTYPE html>
<html class="blackBackground" lang="en">
	<head>
		@include('partials.head')
	</head>
	<body class="blackBackground">
	@yield('cover')
	
	@include('partials.navbar')

	@yield('content')

	@include('partials.footer')
	
	@include('partials.scripts')
	</body>
</html>