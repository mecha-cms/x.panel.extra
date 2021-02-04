<?php namespace _\lot\x\panel\route\__test\field;

function money($_) {
    $_['title'] = 'Money Field';
    $_['lot']['desk']['lot']['form']['lot'][1] = [
        'type' => 'section',
        'lot' => [
            'tabs' => [
                'type' => 'tabs',
                'name' => 0,
                'lot' => [
                    'test' => [
                        'lot' => [
                            'fields' => [
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
                            ]
                        ],
                        'stack' => 10
                    ]
                ]
            ]
        ],
        'stack' => 10
    ];
    $_['lot']['desk']['lot']['form']['lot'][2] = [];
    return $_;
}
