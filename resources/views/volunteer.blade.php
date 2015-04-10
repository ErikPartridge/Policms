@extends('master')

@section('details')
<title>Lend a Hand</title>
@stop

@section('content')
	<nav id="">
    	<div class="nav-wrapper">
      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
        		<li><a class="menu-item-grey" href="/">Home</a></li>
        		<li><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li><a class="menu-item-grey" href="/issues">Issues</a></li>
        		<li><a class="menu-item-grey" href="/about">About</a></li>
        		<li><a class="menu-item-grey" href="/donate">Donate</a></li>
        		<li><a class="menu-item-grey" href="/contact">Contact</a></li>
      		</ul>
    	</div>
  	</nav>
  	<div class="container">	
		<h1 class="block">Lend a Hand</h1>
		<div class="row">
			<div class="col s6">
				<div class="card blue lighten-3">
					<div class="card-content">
						I really appreciate your interest in helping out-- drop me a note and let's get started!
						{!!Form::open(array('url' => '/send-email'))!!}
							<input name="name" type="text" placeholder="Your Name" required>
							<input name="email" type="text" placeholder="Your Email" required>
							<input name="subject" type="text" placeholder="Subject" required>
							<label for="message">Your Message</label>
							<textarea id="message" lass="materialize-textarea" name="message" required></textarea>
						{!!Form::close()!!}
					</div>
				</div>
			</div>
			<div class="col s6">
				<div class="card red lighten-3">
					<div class="card-content">
						I can use every hand I can get-- if you're looking to help out, send me a note to the left, or, if you are already signed up and want to see our calendar, it's available <a href="https://google.com/calendar">here.</a>
					</div>
				</div>
		</div>
	</div>
@stop