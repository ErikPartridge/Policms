@extends('master')

@section('details')
<title>Get In Touch</title>
<script src="//maps.google.com/maps/api/js?sensor=true"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.12/gmaps.min.js"></script>

@stop

@section('content')
	<nav id="">
    	<div class="nav-wrapper">
    		<a href="#" data-activates="slide-out" class="button mobile-only button-collapse">TOGGLE MENU</a>

      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
        		<li><a class="menu-item-grey" href="/">Home</a></li>
        		<li><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li><a class="menu-item-grey" href="/issues">Issues</a></li>
        		<li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
        		<li><a class="menu-item-grey" href="/donate">Donate</a></li>
        		<li><a class="menu-item-grey" href="/contact">Contact</a></li>
      		</ul>
      		    		<ul id="slide-out" class="side-nav">
      		  		<li><a class="menu-item-grey" href="/">Home</a></li>
        		<li><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li><a class="menu-item-grey" href="/issues">Issues</a></li>
        		<li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
        		<li><a class="menu-item-grey" href="/donate">Donate</a></li>
        		<li><a class="menu-item-grey" href="/contact">Contact</a></li>
      				</ul>
    	</div>
  	</nav>
  	<div class="container">	
		<h1 class="block">Get In Touch</h1>
		<div class="row">
			<div class="col m6 s12 l6">
				<div class="card blue darken-5">
					<div class="card-content">
						Mr. Partridge's offices are located at: <br>
						{{$address}} (but not actually)
						<br><br>
						You can contact him via phone at:
						<a href="tel:{{$phone}}">{{$phone}}</a><br><br>
						Or via the form below (*note* this is running in dev mode, will not deliver message*):
						{!!Form::open(array('url' => '/send-email'))!!}
							<input name="name" type="text" placeholder="Your Name" required>
							<input name="email" type="text" placeholder="Your Email" required>
							<input name="subject" type="text" placeholder="Subject" required>
							<label for="message">Your Message</label>
							<textarea id="message" lass="materialize-textarea" name="message" required></textarea>
							<button class="btn submit">Send</button>
						{!!Form::close()!!}
					</div>
				</div>
			</div>
			<div class="col s12 m6 l6">
				<div class="card red darken-5">
					<div class="card-content">
						<div id="map" style="height:440px;"></div>
					</div>
				</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		var map = new GMaps({
  			div: '#map',
  			lat: {{$latitude}},
  			lng: {{$longitude}}
		});
		map.addMarker({
  			lat: {{$latitude}},
  			lng: {{$longitude}},
  			title: 'Offices',
  			infoWindow: {
  				content: '<p>{{$address}}</p>'
			}
		});
		$(".button-collapse").sideNav();
	</script>
@stop