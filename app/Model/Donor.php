<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Laravel\Cashier\Contracts\Billable as BillableContract;


class Donor extends Model implements BillableContract {

	use Billable;

	private $first;

	private $middle;

	private $last;

	private $email;

	private $employer;

	private $job;

	private $street;

	private $city;

	private $state;

	private $phone;


}