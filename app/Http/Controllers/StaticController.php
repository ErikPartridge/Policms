<?php namespace app\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Post;
use Illuminate\Http\Request;
use App\Services\Administrator;


class StaticController extends Controller{

	/**
	* Returns the about view
	*/
	public function about(){
		$content = Administrator::getTrait('about', 'content');
		return view('about', ['content' => $content]);
	}

	/**
	*Returns the Contact view. 
	*/
	public function contact(){
		$address  = Administrator::getTrait('contact', 'address');
		$email    = Administrator::getTrait('contact', 'email');
		$phone    = Administrator::getTrait('contact', 'phone');
		$latitude = Administrator::getTrait('contact', 'latitude');
		$longitude =Administrator::getTrait('contact', 'longitude');

		return view('contact', ['address' => $address, 'email' => $email, 'phone' => $phone, 'latitude' => $latitude, 'longitude' => $longitude]);
	}

	/**
	*
	*/
	public function home(){
		$video = Administrator::getTrait('home', 'video');
		$message = Administrator::getTrait('home', 'message');
		return view('main', ['video' => $video, 'message' => $message]);
	}

	public function issues(){
		$content = Administrator::getTrait('issues', 'content');
		return view('issues', array('content' => $content));
	}

	public function volunteer(){
		return view('volunteer');
	}
	
}