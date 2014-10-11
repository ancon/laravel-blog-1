<?php

return [

    'title' => '分类',
    'single' => '分类',
    'model' => 'Category',

    'columns' => [
        'id' => [
            'title' => 'ID'
        ],
        'name' => [
            'title' => '名称',
        ],
        'slug' => [
            'title' => '别名 (用于 URI 中)',
            'sortable' => false,
        ],
        'created_at',
    ],

    'edit_fields' => [
        'name' => [
            'title' => '名称',
            'type' => 'text'
        ],
        'slug' => [
            'title' => '别名 (用于 URI 中)',
            'type' => 'text'
        ]
    ],

    'filters' => [
        'name' => [
            'title' => '名称',
        ]
    ],


];