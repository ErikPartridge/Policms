<?php

return array(

    'title' => 'Donations',

    'single' => 'donation',

    'model' => 'App\Model\Donation',

    'columns' => array(
        'id',
        'amount' => array(
            'output' => function ($value) {
                return '$' + floor($value / 100) + "." + $value % 100;
            }
        ),
        'created_at' => array(
            'title' => 'When'
        ),
        'donor' => array(
            'title' => 'Donor\'s Email' ,
            'output' => function ($value) {
                return $value->donorEmail();
            }
        )
    ),

    'edit_fields' => array(
        'updated_at'
    ),

    'actions' => array(
        'approve' => array(
            'title' => 'Approve Donation',
            'messages' => array(
                'active' => 'Approving',
                   'success' => 'Approved!',
                'error' => 'There was an error while attempting to approve',
            ),
            'permission' => function ($model) {
                   return !$model->approved;
            },
            'action' => function ($model) {
                //get all the items of this model and reorder them
                $model->approve();
            }
        )
    ),

    'sort' => array(
        'field' => 'created_at',
        'direction' => 'desc'
    ),

    'action_permissions'=> array(
        'create' => function ($model) {
            return false;
        }
    )
);
