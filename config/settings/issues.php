<?php
	use App\Services\Administrator;

	return array(

		'title' => 'Issues Page',

		'edit_fields' => array(
			'content' => array(
				'title' => 'When people want to know what you stand for they\'ll come here',
				'type' => 'wysiwyg'
			)
		),

		'before_save' => function( $data){

			Administrator::save('issues', $data);
		},
		'rules' => array(
			'content' => 'required'
		)
	);
?>