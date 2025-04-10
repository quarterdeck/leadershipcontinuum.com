<?php
use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'The Leadership Continuum',
    'description' => 'A real world, pragmatic look at leadership in business',
    'collections' => [
        'articles' => ['sort' => 'timestamp'],
        'profiles' => ['sort' => 'timestamp'],
    ]
];
