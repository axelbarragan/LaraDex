<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LaraDex - @yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
	<nav class="bavbar bavbar dark bg-primary">
		<a class="navbar-brand">LaraDex</a>
	</nav>
	<div class="container">
		@yield('content')
	</div>
	
</body>
</html>