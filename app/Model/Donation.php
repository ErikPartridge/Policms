<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model {

	protected $table = 'donations';

	public static $name = 'donation';

	//The amount of the transaction in US CENTS
	private $amount;

	//timestamp for it
	private $date;

	public function donor(){
		return $this->belongsTo("App\Model\Donor");
	}

}