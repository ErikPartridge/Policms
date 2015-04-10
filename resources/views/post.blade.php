@extends('master')

@section('details')
<title>{{$post->title}}</title>
@stop

@section('content')
	<nav id="top-menu">
    	<div class="nav-wrapper">
        <a href="#" data-activates="slide-out" class="button mobile-only button-collapse">MENU</a>

      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
      			<li><a class="menu-item-grey" href="/">Home</a></li>
      			<li><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li><a class="menu-item-grey" href="/about">About</a></li>
        		<li><a class="menu-item-grey" href="/donate">Donate</a></li>
        		<li><a class="menu-item-grey" href="/issues">Issues</a></li>
        		<li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
        		<li><a class="menu-item-grey" href="/contact">Contact</a></li>
      		</ul>
                            <ul id="slide-out" class="side-nav">

                 <li><a class="menu-item-grey" href="/">Home</a></li>
            <li><a class="menu-item-grey" href="/blog">Blog</a></li>
            <li><a class="menu-item-grey" href="/about">About</a></li>
            <li><a class="menu-item-grey" href="/donate">Donate</a></li>
            <li><a class="menu-item-grey" href="/issues">Issues</a></li>
            <li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
            <li><a class="menu-item-grey" href="/contact">Contact</a></li>
              </ul>
    	</div>
  </nav>
  <br>
  	<div class="post">
  		<h3 style="text-align:center;"><a href="/blog/{{$post->slug}}">{{$post->title}}</a></h3>
      <small style="text-align:center;">Last updated: {{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</small>
      <br>
      <small><a href="/blog">Back</a></small>
  		<p>{!!$post->content!!}</p>
  	</div>
@stop

@section('scripts')
  <script>
    $(".button-collapse").sideNav();
  </script>
@stop