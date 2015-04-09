@extends('master')

@section('details')
<title>All about Erik Partridge</title>
@stop

@section('content')
	<nav id="">
    	<div class="nav-wrapper">
      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
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
		<h1 class="block">All About Me</h1>
		<div class="row">
			<div class="col s2">
				<div class="card blue lighten-4">
					<div class="card-content">
						Like what you see? <a href="/donate">Donate today!</a>
					</div>
				</div>
			</div>
			<div class="col s8">
			{!! $content !!}
			</div>
			<div class="col s2">
			</div>
		</div>
	</div>
@stop