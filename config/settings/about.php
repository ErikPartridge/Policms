<?php
	use App\Services\Administrator;

	return array(

		'title' => 'About Page',

		'edit_fields' => array(
			'content' => array(
				'title' => 'Describe yourself, your biography, etc.',
				'type' => 'wysiwyg'
			)
		),

		'before_save' => function( $data){

			Administrator::save('about', $data);
		},
		'rules' => array(
			'content' => 'required'
		)
	);
?>