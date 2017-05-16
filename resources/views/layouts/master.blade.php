<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials.head')
	</head>
	<body>
	@yield('cover')
	
	<A NAME="content">
	@include('partials.navbar')
	
	@include('flash::message')

	@yield('content')

	@include('partials.footer')

	@include('partials.scripts')
	</body>
</html>