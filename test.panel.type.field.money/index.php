<?php namespace x\panel\route\__test\field;

function money($_) {
    $_['title'] = 'Money Field';
    $_['lot']['desk']['lot']['form']['lot'][1]['lot']['fields'] = [
        'type' => 'fields',
        'lot' => [
            0 => [
                'title' => 'Money',
                'type' => 'money',
                'value' => 10000,
                'currency' => 'USD',
                'name' => 'default[money][0]',
                'state' => ['join' => '.'],
                'stack' => 10
            ],
            1 => [
                'title' => 'Money',
                'type' => 'money',
                'currency' => 'USD',
                'name' => 'default[money][1]',
                'state' => ['join' => ','],
                'stack' => 20
            ]
        ],
        'stack' => 10
    ];
    return $_;
}