<!DOCTYPE html5>
<html>
	<head>
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/main.css" rel="stylesheet">
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  		<script src="gmaps/gmaps.js"></script>
  		<style type="text/css">
    		#map {
      		width: 400px;
      		height: 400px;
    		}
  		</style>
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
				<a href="/posts">Posts</a>
			</div>
		</div>
	<div class="pure-g">
		<div class="pure-u-1-2">
			<h3>Location:</h3>
			<p>The Assemblyman's offices are located at:</p>
			<p>450 W Kalamazoo Street</p>
			<p>Suite 205</p>
			<p>Lansing, MI 34033</p>
			<p>Phone: 517-301-2301</p>
			<h3>Mailing Address:</h3>
			<p>PO Box 12324</p>
			<p>Lansing, MI 43032</p>
			<div id="map">
			</div>
		</div>
		<div class="pure-u-1-2">
			{!!Form::open(array('method' => 'POST', 'url'=>'/'))!!}
				<label for="first">First Name:</label>
				<input type="text" name="first" placeholder="Erik">
				<label for="last">Last Name:</label>
				<input type="text" name="last" placeholder="Partridge">
				<label for="email">Email:</label>
				<input type="email" name="email" placeholder="Email">
				<label for="subject">Subject:</label>
				<input type="text" name="subject">
				<label for="last">Message:</label>
				<textarea name="content" placeholder="Your message here">

				</textarea>
				<button type="submit" class="pure-button pure-button-primary">Send</button>
			{!!Form::close()!!}

	</div>
	</body>
	<script>
		var map = new GMaps({
    		div: '#map',
    		lat: 42.730001,
    		lng: -84.557798
		});
		map.addMarker({
			lat: 42.730001,
  			lng: -84.557798,
  			title: 'Offices',
  			infoWindow: {
  				content: '<p>405 W Kalamazoo St, Lansing MI</p>'
  			}
		});
	</script>
</html>