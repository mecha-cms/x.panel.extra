<?php namespace _\lot\x\panel\route\__test;

function panel__extra($_) {
    $_['title'] = 'Panel Extra Test';
    $_['lot']['desk']['lot']['form']['lot'][1] = [
        'type' => 'section',
        'lot' => [
            'tabs' => [
                'type' => 'tabs',
                'name' => 0,
                'lot' => [
                    'default' => [
                        'lot' => [
                            'fields' => [
                                'title' => 'Default Fields',
                                'description' => 'These field types are available in the core control panel extension.',
                                'type' => 'fields',
                                'lot' => [
                                    0 => [
                                        'title' => 'Text',
                                        'type' => 'text',
                                        'name' => 'test[text]',
                                        'stack' => 10
                                    ],
                                    1 => [
                                        'title' => 'Content',
                                        'type' => 'content',
                                        'name' => 'test[content]',
                                        'stack' => 20
                                    ],
                                    2 => [
                                        'title' => 'Source',
                                        'type' => 'source',
                                        'name' => 'test[source]',
                                        'stack' => 30
                                    ],
                                    3 => [
                                        'title' => 'Link',
                                        'type' => 'link',
                                        'name' => 'test[link]',
                                        'stack' => 40
                                    ],
                                ],
                                'stack' => 10
                            ]
                        ],
                        'stack' => 10
                    ],
                    'extra' => [
                        'lot' => [
                            'fields' => [
                                'title' => 'Extra Fields',
                                'description' => 'These field types are not available in the core control panel extension.',
                                'type' => 'fields',
                                'lot' => [
                                    0 => [
                                        'title' => 'Money',
                                        'type' => 'money',
                                        'currency' => 'USD',
                                        'name' => 'test[money]',
                                        'state' => ['join' => '.'],
                                        'stack' => 10
                                    ]
                                ],
                                'stack' => 10
                            ]
                        ],
                        'stack' => 20
                    ]
                ]
            ]
        ],
        'stack' => 20
    ];
    $_['lot']['desk']['lot']['form']['lot'][2] = [
    ];
    return $_;
}
