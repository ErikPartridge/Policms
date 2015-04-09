@extends('master')

@section('details')
	<title>Credit Card Details</title>
@stop

@section('content')
	<div class="row" style="margin-top:10%;">
		<div class="col s4 offset-s4">
			<div class="card blue lighten-3">
				{!!Form::open(array('url' => '/process-donation', 'method' => 'POST'))!!}
				<div class="credit-card-input no-js" id="skeuocard">
				  <p class="no-support-warning">
				    Either you have Javascript disabled, or you're using an unsupported browser, amigo! That's why you're seeing this old-school credit card input form instead of a fancy new Skeuocard. On the other hand, at least you know it gracefully degrades...
				  </p>
				  <label for="cc_type">Card Type</label>
				  <select name="cc_type">
				    <option value="visa">Visa</option>
				    <option value="discover">Discover</option>
				    <option value="mastercard">MasterCard</option>
				    <option value="jcb">JCB</option>
				    <option value="amex">American Express</option>
				    <option value="dinersclubintl">Diners Club</option>
				  </select>
				  <label for="cc_number">Card Number</label>
				  <input type="text" name="cc_number" id="cc_number" placeholder="XXXX XXXX XXXX XXXX" maxlength="19" size="19">
				  <label for="cc_exp_month">Expiration Month</label>
				  <input type="text" name="cc_exp_month" id="cc_exp_month" placeholder="00">
				  <label for="cc_exp_year">Expiration Year</label>
				  <input type="text" name="cc_exp_year" id="cc_exp_year" placeholder="00">
				  <label for="cc_name">Cardholder's Name</label>
				  <input type="text" name="cc_name" id="cc_name" placeholder="John Doe">
				  <label for="cc_cvc">Card Validation Code</label>
				  <input type="text" name="cc_cvc" id="cc_cvc" placeholder="123" maxlength="3" size="3">
				</div>
				</div>
				<div class="card-action">
					<p>You are donating ${{$amount / 100}}</p>
					<p>Right about here there'd be a submit button if this wasn't a demo.</p>
				</div>
				{!!Form::close()!!}
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
  			card = new Skeuocard($("#skeuocard"), {
  				debug:true
  			});
		});
	</script>
@stop