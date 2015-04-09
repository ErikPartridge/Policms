<?php
	use App\Services\Administrator;

	return array(
		'title' => 'Home Page',
		'edit_fields' => array(
			'message' => array(
				'title' => 'Message (displayed in top right of home page)',
				'type'  => 'textarea',
				'limit' => 200
			),
			'video' => array(
				'title' => 'Youtube URL',
				'type'  => 'text',
				'limit' => 70
			)
		),
		'rules' => array(
			'video' => 'required|url',
			'message' => 'required|max:200'
		),

		'before_save' => function($data){
			$data['video'] = str_replace('watch?v=', 'embed/', $data['video']);
			Administrator::save('home', $data);
		}
	);
?>