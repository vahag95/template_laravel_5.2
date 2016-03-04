<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Cypras-One page html5 template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	@yield('styles')
	<title>@yield('title')</title>

	<!-- styles -->
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	@include('layouts.headers.top')
	
	<!-- Scripts -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
</head>
<body>
	@yield('content')
	@yield('scripts')
</body>
</html>