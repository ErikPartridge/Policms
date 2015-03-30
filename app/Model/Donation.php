<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Donor;

class Donation extends Model {

	protected $table = 'donations';

	public static $name = 'donation';

	//The amount of the transaction in US CENTS
	private $amount;


	public function donor(){
		return $this->belongsTo("App\Model\Donor");
	}

	public function donorEmail(){
		return donor()->email;
	}

	public function approve(){
		$donor = donor();
		if($donor->charge($amount, array(
			'receipt_email' => $donor->email
		))){
			return false;
		}else{
			return true;
		}
	}

}