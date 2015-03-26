<?php

return array(

	'title' => 'Auth',

	'single' => 'user',

	'model' => 'App\Model\User',

	'columns' => array(
		'id',
		'name',
		'email',
		'admin' => array(
			'output' => function($value){
				if($value){
					return 'yes';
				}else{
					return 'no';
				}
			}
		)
	),

	'edit_fields' => array(
		'name',
		'email',
		'admin' => array(
			'title' => 'admin',
			'type' => 'bool'
		)
	),

	'sort' => array(
		'field' => 'name',
		'direction' => 'asc'
	),

	'filters' => array(
		'name' => array(
			'title' => 'Name Contains',
		),
		'email' => array(
			'title' => 'Email Contains'
		),
		'admin' => array(
			'title' => 'Is Admin',
			'type' => 'bool'
		)
	),

	'action_permissions'=> array(
    	'create' => function($model)
    	{
        	return false;
    	}
	)
);

?>