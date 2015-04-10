@extends('master')

@section('details')
<title>All about Erik Partridge</title>
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
		<h1 class="block">All About Me</h1>
		<div class="row">
			<div class="col s12 m2 l2">
				<div class="card blue lighten-4">
					<div class="card-content">
						Like what you see? <a href="/donate">Donate today!</a>
					</div>
				</div>
			</div>
			<div class="col s12 m8 l8">
			{!! $content !!}
			</div>
			<div class="col s0 m2 l8">
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		$(".button-collapse").sideNav();
	</script>
@stop