<?php

return array(

	'title' => 'Posts',

	'single' => 'post',

	'model' => 'App\Model\Post',

	'columns' => array(
		'id' => array(
			'title' => 'ID'
		),
		'title',
		'content' => array(
			'output' => function($value){
				return mb_strimwidth($value, 0, 50, "...");
			}
		),
		'published' => array(
			'output' => function($value){
				if($value){
					return 'yes';
				}else{
					return 'no';
				}
			}
		),
		'updated_at' => array(
			'title' => 'Last Updated'
		)
	),

	'edit_fields' => array(
		
		'title' => array(
			'title' => 'Title',
			'type'  => 'text'
		),

		'content' => array(
			'title' => 'Content',
			'type' => 'wysiwyg'
		),

		'published' => array(
			'title' => 'Publish',
			'type' => 'bool'
		)
	),

	'rules' => array(
		'title' => 'required',
		'content' => 'required'
	),

	'messages' => array(
		'title.required' => 'Title is a required field',
		'content.required' => 'You have to have some content!'
	),
	
	'form_width' => 950,

	'sort' => array(
		'field' => 'updated_at',
		'direction' => 'desc'
	),

	'filters' => array(
		'title' => array(
			'title' => 'Title'
		),
		'published' => array(
			'type' => 'bool',
			'title' => 'Published'
		),
		'content' => array(
			'title' => 'Content Contains'
		)
	)
);

?>