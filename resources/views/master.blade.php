<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" href="css/main.css">
		@yield('details')
	</head>
	<body>
		@yield('menu')
		@yield('content')
	</body>
	<footer>
		(c) <a href="mailto:erikdevelopments@gmail.com">Erik Partridge 2015</a>
	</footer>
	@yield('scripts')
</html>



