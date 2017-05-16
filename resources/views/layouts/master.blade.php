<!DOCTYPE html>
<html lang="en">
	<head>
	@include('partials.head')
	</head>
	<body>
	@yield('cover')

	@include('partials.navbar')

	@yield('content')

	@include('partials.footer')

	@include('partials.scripts')
	</body>
</html>