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
		<div class="pure-g">
			<div class="pure-u-1-3">
				<a href="/posts" style="font-size:22px;border:none;"><h4>Recent Posts</h4></a>
				<ul>
					@foreach($posts as $p)
					<li><a href="/posts/{{$p->slug}}" style="font-size: 16px; border:none;">{{$p->title}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="pure-u-2-3">
			<h1><a href="/posts/{{$post->slug}}" style="font-size: 32px; text-decoration:none;">{{$post->title}}</a></h1>
				<div class="content">
					{!!$post->content!!}
				</div>
			</div>
		</div>
		</body>
	</body>
</html>