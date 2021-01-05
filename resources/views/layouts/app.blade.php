<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('home') }}">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('products') }}">Produits</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('employees') }}">Accueil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('companies') }}">Produits</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>