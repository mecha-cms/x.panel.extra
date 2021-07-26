<?php namespace x\panel\route\__test\field;

function money($_) {
    $_['title'] = 'Money Field';
    $_['lot']['desk']['lot']['form']['lot'][1]['lot']['fields'] = [
        'type' => 'fields',
        'lot' => [
            'money' => [
                'title' => 'Money',
                'type' => 'money',
                'currency' => 'USD',
                'name' => 'default[money]',
                'state' => ['join' => '.']
            ]
        ],
        'stack' => 10
    ];
    return $_;
}
