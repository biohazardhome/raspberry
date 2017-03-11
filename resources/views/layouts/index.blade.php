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

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter43204814 = new Ya.Metrika({
	                    id:43204814,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true,
	                    webvisor:true,
	                    trackHash:true
	                });
	            } catch(e) { }
	        });

	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";

	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/43204814" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</body></html>