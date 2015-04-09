<!DOCTYPE html>
<html>
	
	<head>
		@yield('details')
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
		<script type="text/javascript" src="/js/main.js"></script>
		<link rel="stylesheet" href="/css/vendor.css">
		<link rel="stylesheet" href="/css/app.css">
		@yield('details')
	</head>
	<body>
		@yield('content')
	</body>
	<footer>
		(c) <a href="mailto:erikdevelopments@gmail.com">Erik Partridge 2015</a> -- <a href="/admin">Admin</a>
	</footer>
	@yield('scripts')
</html>
