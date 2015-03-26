<?php

return array(

	'title' => 'Donations',

	'single' => 'donation',

	'model' => 'App\Model\Donation',

	'columns' => array(
		'id',
		'first' => array(
			'title' => 'first name'
		),
		'middle',
		'last' => array(
			'title' => 'last name'
		),
		'email',
		'employer',
		'job',
		'street' => array(
			'title' => 'street address'
		),
		'city',
		'state',
		'phone'
	),

	'edit_fields' => array(
		'email'
	),

	'sort' => array(
		'field' => 'created_at',
		'direction' => 'desc'
	),

	'filters' => array(
		'last' => array(
			'title' => 'Last Name Contains'
		),
		'email' => array(
			'title' => 'Email Contains'
		),
		'city' => array(
			'title' => 'City'
		),
		'state' => array(
			'title' => 'State'
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