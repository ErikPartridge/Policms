@extends('master')
@section('details')
	<title>Erik A. Partridge</title>
@stop

@section('content')
	<div class="header">
		<h1 class="block">Erik A. Partridge</h1>
	</div>
	<div class="row cardholder">
		<div class="col s5 offset-s1" id="video-card">
			<div class="card blue lighten-3">
				<div class="card-content">
					<div class="video-container">
        				<iframe width="560" height="315" src="https://www.youtube.com/embed/3ZJ5K0zo7dc" frameborder="0" allowfullscreen></iframe>
    				</div>
				</div>
				<div class="card-action" style="background-color:#FFF;">
					<div class="row">
						{!!Form::open(array('url' => 'thank-you', 'class' => 'col s12', 'method' => 'POST'))!!}
							<div class="row">
      							<div class="input-field col s6" style="margin-top:0px!important;paddington">
        							<input id="email" type="email" placeholder="mailinglist@youremail.com" class="validate">
      							</div>
      							<button class="btn col s3 offset-s3 blue" style="font-family:'PT Serif', serif">Submit</button>
    						</div>
						{!!Form::close()!!}
					</div>
				</div>
			</div>
		</div>
		<div class="col s5" id="involve-card">
			<div class="card red lighten-3">
				<div class="card-content">
					<h3 class="block">Get Involved</h3>
					<p style="font-family:'PT Serif', serif">Lorem ipsum dolor sit amet, his ut tollit percipitur, no ignota lucilius sapientem duo. No iisque utroque accusata est, sit eu clita accumsan. Vis no alia facete tritani, eu est nominati torquatos.</p>
					<div class="row">
						<a href="/volunteer" class="waves-effect btn-lg"><h3 class="block-white">Volunteer</h3></a><br>
						<a href="/donate" class="waves-effect btn-lg"><h3 class="block-white">Donate</h3></a><br>
						<a href="/contact" class="waves-effect btn-lg"><h3 class="block-white">Get in Touch</h3></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col s1"></div>
	</div>
	<nav id="bottom-menu">
    	<div class="nav-wrapper">
      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
        		<li class="s3"><a class="menu-item-grey" href="/about">About</a></li>
        		<li class="s3"><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li class="s3"><a class="menu-item-grey" href="/issues">Issues</a></li>
        		<li class="s3"><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
        		<li class="s3"><a class="menu-item-grey" href="/donate">Donate</a></li>
        		<li class="s3"><a class="menu-item-grey" href="/contact">Contact</a></li>
      		</ul>
    	</div>
  </nav>
 @stop

@section('scripts')
	<script>
 		$("#bottom-menu").sticky({ topSpacing: 0 });
	</script>
@stop





