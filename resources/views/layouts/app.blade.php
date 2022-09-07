<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JGtravels-@yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a href="#" class="navbar-brand">enlace</a>
		<a href="#" class="navbar-brand">enlace</a>
		<a href="#" class="navbar-brand">enlace</a>
	</nav>
	<div id="app" class="container">
		@yield('content')
		<otro-ejemplo></otro-ejemplo>
		
	</div>
	
	<script src="{{mix('js/app.js')}}"></script>
</body>
</html>