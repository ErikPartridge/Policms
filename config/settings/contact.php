<?php
	use App\Services\Administrator;

	return array(

		'title' => 'Contact Page',

		'edit_fields' => array(
			'address' => array(
				'title' => 'Your Location',
				'type' => 'text',
				'limit' => '500'
			),
			'phone' => array(
				'title' => 'Your Phone Number',
				'type' => 'text'
			),
			'email' => array(
				'title' => 'Your Email',
				'type' => 'text'
			)
		),

		'before_save' => function( $data){

			Administrator::save('contact', $data);
		},

		'rules' => array(
			'address' => 'required',
			'phone' => 'required',
			'email' => 'required|email'
		)
	);
?>