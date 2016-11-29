<!DOCTYPE html>
<html><head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="description" content="@yield('description')">
	
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

	@yield('head')
	
</head><body class="container-fluid">

	<header class="row">
		{{-- @include('menu') --}}
	</header>

	<main class="row">
		@yield('content')
		@yield('sidebar')
	</main>
	
	

	<footer class="row">

	</footer>

	
	<link href="/css/index.css" rel="stylesheet" type="text/css">
	@yield('css')

	<script src="/js/jquery-3.0.0.min.js" type="text/javascript"></script>
	<script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/js/index.js" type="text/javascript"></script>
	@yield('js')

</body></html>