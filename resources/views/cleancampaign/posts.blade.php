<html>
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/main.css" rel="stylesheet">
		<title>Clean Campaign Theme</title>
	</head>
	<body>
		<div class="pure-g" id="head blog-top">
			<div class="pure-u-1-2"></div>
			<div class="pure-u-1-2">
				<a href="/about">About</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/">Home</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/viewpoint">Views</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/contact">Contact</a>
			</div>
		</div>
		@foreach($posts as $post)
			<div class="post">
			<h4><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h4>
				{!!$post->content!!}
			</div>
		@endforeach
	</body>
</html>