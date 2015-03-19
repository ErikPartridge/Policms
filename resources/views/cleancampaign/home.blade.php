<html>
	<head>
		<link rel="stylesheet" href="pure/pure-min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/main.css" rel="stylesheet">
		<title>Clean Campaign Theme</title>
	</head>
	<body>
		<div class="pure-g" id="head">
			<div class="pure-u-1-2"></div>
			<div class="pure-u-1-2">
				<a href="/about">About</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/posts">Blog</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/viewpoint">Views</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="/contact">Contact</a>
			</div>
		</div>
		<div class="landing-container">
			<div id="landing">
				<p id="heavy">Assemblyman Erik Partridge</p>
				<p id="light">proudly representing Michigan's 43rd district</p>
			</div>
		</div>
		<div class="pure-g" id="lower-form">
			{!! Form::open(array('url' => '/join', 'class' => 'pure-form')) !!}
				<fieldset>
					<input type="text" name="name" placeholder="Name">
					<input type="email" name="email" placeholder="Email">
					<button type="submit" class="pure-button pure-button-primary">Be the change*</button>
				</fieldset>
			{!! Form::close() !!}
		</div>
		@if(count($posts) > 0)
		<div id="recent">
			<h2 style="margin-left:auto;margin-right:auto;">Recent Updates From the Assemblyman</h2>
		</div>
		@endif
		@foreach($posts as $post)
			<div class="post">
			<h4><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h4>
				{!!$post->content!!}
			</div>
		@endforeach
	</body>
</html>
