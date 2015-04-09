@extends('master')
	
@section('details')
	<title>Thank You</title>
@stop

@section('content')
	<div class="row" style="margin-top:10%;">
		<div class="col s4 offset-s4">
			<div class="card blue lighten-3">
				<div class="card-content">
					<h3 style="color:#FFF;">Thank You!</h3>
					<p>Thanks for joining the mailing list! I'll be in touch soon!</p>
					<p>Not really, this is just a demo, but very doable</p>
				</div>
				<div class="card-action">
					<p>This page will self-destruct in <span id="time"></span></p>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		var timer = new Tock({
  			countdown: true,
  			interval: 10,
  			callback: function(){
  				var current_time = timer.msToTime(timer.lap());
  				$("#time").text(current_time);
  			},
  			complete: function(){
  				window.location.href = '/';
  			}
		});
		$(document).ready(function(){
			timer.start('00:15');
		});
	</script>
@stop