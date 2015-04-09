<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Skovmand\Mailchimp\MailchimpServiceProvider;

use Illuminate\Http\Request;

class MailingController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//TODO logic here
		return view('thank-you');
	}

}
