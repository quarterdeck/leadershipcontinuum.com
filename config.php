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
    ],
    'season' => match(idate('n')){
        3,4,5 => 'spring',
        6,7,8 => 'summer',
        9,10,11 => 'autumn',
        12,1,2 => 'winter',
    },
];
