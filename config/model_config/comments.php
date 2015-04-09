<?php

return array(

    'title' => 'Comments',

    'single' => 'comment',

    'model' => 'App\Model\Comment',

    'columns' => array(
        'id' => array(
            'title' => 'ID'
        ),
        'title',
        'author',
        'content' => array(
            'output' => function ($value) {
                return mb_strimwidth($value, 0, 30, "...");
            }
        ),
        'approved' => array(
            'output' => function ($value) {
                if ($value) {
                    return 'yes';
                } else {
                    return 'no';
                }
            }
        ),
        'created_at' => array(
            'title' => 'Posted At'
        )
    ),

    'edit_fields' => array(

        'published' => array(
            'title' => 'Publish',
            'type' => 'bool'
        )
    ),
    
    'sort' => array(
        'field' => 'created_at',
        'direction' => 'desc'
    ),

    'filters' => array(
        'title' => array(
            'title' => 'Title'
        ),
        'approved' => array(
            'type' => 'bool',
            'title' => 'Approved'
        ),
        'content' => array(
            'title' => 'Content Contains'
        ),
        'author' => array(
            'author' => 'Author'
        )
    ),

    'action_permissions'=> array(
        'create' => function ($model) {
            return false;
        }
    ),
);
