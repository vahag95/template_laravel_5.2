<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@yield('styles')
	<title>@yield('title')</title>

	<!-- styles -->
	<link rel="stylesheet" href="/assets/css/bootstrap.css">


	<!-- Scripts -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
</head>
<body>
	@yield('content')
	@yield('scripts')
</body>
</html>