@extends('master')

@section('details')
<title>This I Believe</title>
@stop

@section('content')
	<nav id="">
    	<div class="nav-wrapper">
      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
        		<li><a class="menu-item-grey" href="/">Home</a></li>
        		<li><a class="menu-item-grey" href="/about">About</a></li>
        		<li><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
        		<li><a class="menu-item-grey" href="/donate">Donate</a></li>
        		<li><a class="menu-item-grey" href="/contact">Contact</a></li>
      		</ul>
                  <ul id="slide-out" class="side-nav">
               <li><a class="menu-item-grey" href="/">Home</a></li>
            <li><a class="menu-item-grey" href="/about">About</a></li>
            <li><a class="menu-item-grey" href="/blog">Blog</a></li>
            <li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
            <li><a class="menu-item-grey" href="/donate">Donate</a></li>
            <li><a class="menu-item-grey" href="/contact">Contact</a></li>
              </ul>
    	</div>
  	</nav>
	<div class="container">	
		<h1 class="block">I Believe:</h1>
		<div class="post">
			{!! $content !!}
		</div>
	</div>
@stop

@section('scripts')
  <script>
    $(".button-collapse").sideNav();
  </script>
@stop