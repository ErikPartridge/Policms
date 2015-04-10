@extends('master')

@section('details')
	<title>Donate</title>
@stop

@section('content')
	<nav id="top-menu">
    	<div class="nav-wrapper">
    		<a href="#" data-activates="slide-out" class="button mobile-only button-collapse">MENU</a>

      		<ul id="nav-mobile" class="left hide-on-med-and-down row">
      			<li><a class="menu-item-grey" href="/">Home</a></li>
        		<li><a class="menu-item-grey" href="/about">About</a></li>
        		<li><a class="menu-item-grey" href="/blog">Blog</a></li>
        		<li><a class="menu-item-grey" href="/issues">Issues</a></li>
        		<li><a class="menu-item-grey" href="/volunteer">Volunteer</a></li>
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
	<div class="row" style="margin-top:5%;">
		<div class="col m4 s12 l4 offset-m4 offset-l4">
			<div class="card blue lighten-2">
				<div class="card-content">
					<h3 style="color:#FFF;">Donate!</h3>
					<p>First select how much you are willing to contribute:</p><br>
					{!! Form::open(array('url' => '/credit-card', 'method' => 'POST'))!!}
						<a href="/" class="btn amt">$500</a>
						<a href="/" class="btn amt">$200</a>
						<a href="/" class="btn amt">$100</a>
						<a href="/" class="btn amt">$50&nbsp&nbsp</a>
						<a href="/" class="btn amt">$20&nbsp&nbsp</a>
						<a href="/" class="btn amt">$10&nbsp&nbsp</a><br>
						<span>Or enter an amount:&nbsp<input style="background-color:#FFF !important; width:50%"type="number" name="amount" min="1" max="1000" placeholder="$50.00"></span>
						<p>There would be a button here to insert credit-card information (this is a demo), ergo, for security, no credit card. Click any button to go back.</p>
 					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		$(".button-collapse").sideNav();
	</script>
@stop