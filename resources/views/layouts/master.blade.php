<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Olympus PC Builder</title>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<link rel="stylesheet" href="/css/main.css"/> 
	</head>
	<body>
	@yield('cover')
	<!-- Navbar -->
		<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="/images/mountainLogo.png" id="navbarLogo" class="d-inline-block align-top" alt="">
				olympus</a>
			<div class="collapse navbar-collapse justify-content-stretch" id="navbarNavDropdown">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							BUILD
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">Start Your Build</a>
							<a class="dropdown-item" href="#">View Builds</a>
							<a class="dropdown-item" href="#">Recommended Builds</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							SHOP
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="#">New Parts</a>
							<a class="dropdown-item" href="#">Used Parts</a>
							<a class="dropdown-item" href="#">Builds</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">REVIEWS</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">BLOG</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">LOGIN/REGISTER</a>
					</li>
				</ul>
			</div>
		</nav>

	

	@yield('content')
	<!-- Footer -->
		<div class="footer">
			<div class="container-fluid">
				<div class="row topPaddingSm">
					<div class="col-md-3 col-sm-12 offset-sm-0">
						<h3>WHAT WE'RE ABOUT</h3>
						<p>We are about giving the power back to the creator... rather they are experienced or just getting started. We provide the tools needed to make it happen. Build your dream.</p>
					</div>
					<div class="col-md-3 offset-md-2 col-sm-12 offset-sm-0">
						<h3>NEED HELP?</h3>
						<ul>
							<li><a href="">Visual Tour</a></li>
							<li><a href="">FAQs</a></li>
							<li><a href="">Contact Us</a></li>
							<li><a href="">Privacy</a></li>
							<li><a href="">Terms</a></li>
						</ul>
					</div>
					<div class="col-md-3 offset-md-1 col-sm-12 offset-sm-0">
						<img src="/images/mountainLogo.png" alt="Olympus Logo">
						<h3>OLYMPUS PC BUILDER</h3>
						<p class="forceWrap">contact@olympuspcbuilder.com</p>
					</div>
				</div>
			</div>
		</div>

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
</html>