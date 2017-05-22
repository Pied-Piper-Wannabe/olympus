<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="/">
		<img src="/images/mountainLogo.png" id="navbarLogo" class="d-inline-block align-top" alt="">
		olympus</a>
	<div class="collapse navbar-collapse justify-content-stretch" id="navbarNavDropdown">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					BUILD
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/builds/create">My Builds</a>
					<a class="dropdown-item" href="/builds">View Builds</a>
					<a class="dropdown-item" href="#">Recommended Builds</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					SHOP
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="/parts/cpu">CPU</a>
					<a class="dropdown-item" href="/parts/cpu-cooler">CPU Cooler</a>
					<a class="dropdown-item" href="/parts/motherboard">Motherboard</a>
					<a class="dropdown-item" href="/parts/memory">Memory</a>
					<a class="dropdown-item" href="/parts/storage">Storage</a>
					<a class="dropdown-item" href="/parts/gpu">GPU</a>
					<a class="dropdown-item" href="/parts/case">Case</a>
					<a class="dropdown-item" href="/parts/power-supply">Power Supply</a>
					<a class="dropdown-item" href="/parts/operating-system">Operating System</a>
					<a class="dropdown-item" href="/parts/misc">Misc</a>
				</div>
			</li>
			@if (Auth::check())
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						MY ACCOUNT
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="/account">View Profile</a>
						<a class="dropdown-item" href="/account/{{Auth::user()->id}}/edit">Edit Account</a>
						<a class="dropdown-item" href="/logout">Logout</a>
					</div>
			</li>
			@else
				<li class="nav-item">
					<a class="nav-link" href="/login">LOGIN/REGISTER</a>
				</li>
			@endif
		</ul>
	</div>
</nav>