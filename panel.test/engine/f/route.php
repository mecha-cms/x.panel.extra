<?php

namespace _\lot\x\panel\route {
    function __test($_) {
        extract($GLOBALS, \EXTR_SKIP);
        $tests = \is(\get_defined_functions(true)['user'], function($v) {
            return 0 === \strpos($v, "_\\lot\\x\\panel\\route\\__test\\");
        });
        $content = '<ul>';
        foreach ($tests as $test) {
            $path = \implode('/', \map(\explode("\\", \substr($test, 20)), function($v) {
                return \strtr(\p2f($v), ['__' => '.']);
            }));
            $content .= '<li><a href="' . $url . $_['/'] . '/::g::/' . $path . '" target="_blank"><code>' . $test . '</code></a></li>';
        }
        $content .= '</ul>';
        $_['title'] = 'Tests';
        $_['lot']['desk']['lot']['form']['lot'][1] = [
            'title' => 'Tests',
            'description' => 'List of the available control panel tests.',
            'type' => 'section',
            'content' => $content
        ];
        return $_;
    }
}

namespace _\lot\x\panel\route\__test {
    function fields($_) {
        $_['title'] = 'Fields';
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
                                    'title' => 'Default Fields',
                                    'description' => 'These field types are available in the core control panel extension.',
                                    'type' => 'fields',
                                    'lot' => [
                                        'blob' => [
                                            'title' => 'Blob',
                                            'type' => 'blob',
                                            'name' => 'default[blob]'
                                        ],
                                        'blobs' => [
                                            'title' => 'Blobs',
                                            'type' => 'blobs',
                                            'name' => 'default[blobs]'
                                        ],
                                        'color' => [
                                            'title' => 'Color',
                                            'type' => 'color',
                                            'value' => '#f00'
                                        ],
                                        'colors' => [
                                            'title' => 'Colors',
                                            'type' => 'colors',
                                            'lot' => ['#f00', '#0f0', '#00f'],
                                            'sort' => false
                                        ],
                                        'combo' => [
                                            'title' => 'Combo',
                                            'type' => 'combo',
                                            'lot' => [
                                                1 => 'Item 1',
                                                2 => 'Item 2',
                                                3 => [
                                                    'title' => 'Item 3',
                                                    'value' => 'value:3'
                                                ],
                                                4 => [
                                                    'title' => 'Item 4',
                                                    'lot' => [
                                                        '4.1' => 'Item 4.1',
                                                        '4.2' => 'Item 4.2',
                                                        '4.3' => [
                                                            'title' => 'Item 4.3',
                                                            'value' => 'value:4.3'
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'content' => [
                                            'title' => 'Content',
                                            'type' => 'content',
                                            'name' => 'default[content]'
                                        ],
                                        'date' => [
                                            'title' => 'Date',
                                            'type' => 'date',
                                            'name' => 'default[date]'
                                        ],
                                        'date-time' => [
                                            'title' => 'Date/Time',
                                            'type' => 'date-time',
                                            'name' => 'default[date-time]'
                                        ],
                                        'email' => [
                                            'title' => 'Email',
                                            'type' => 'email',
                                            'name' => 'default[email]'
                                        ],
                                        'hidden' => [
                                            'title' => 'Hidden',
                                            'type' => 'hidden',
                                            'name' => 'default[hidden]'
                                        ],
                                        'item' => [
                                            'title' => 'Item',
                                            'type' => 'item',
                                            'name' => 'default[item]',
                                            'lot' => [
                                                1 => 'Item 1',
                                                2 => 'Item 2',
                                                3 => 'Item 3'
                                            ],
                                            'value' => 2
                                        ],
                                        'items' => [
                                            'title' => 'Items',
                                            'type' => 'items',
                                            'name' => 'default[items]',
                                            'lot' => [
                                                1 => 'Item 1',
                                                2 => 'Item 2',
                                                3 => 'Item 3'
                                            ],
                                            'value' => [
                                                2 => true,
                                                3 => true
                                            ]
                                        ],
                                        'link' => [
                                            'title' => 'Link',
                                            'type' => 'link',
                                            'name' => 'default[link]'
                                        ],
                                        'number' => [
                                            'title' => 'Number',
                                            'type' => 'number',
                                            'name' => 'default[number]'
                                        ],
                                        'pass' => [
                                            'title' => 'Pass',
                                            'type' => 'pass',
                                            'name' => 'default[pass]'
                                        ],
                                        'query' => [
                                            'title' => 'Query',
                                            'type' => 'query',
                                            'name' => 'default[query]'
                                        ],
                                        'range' => [
                                            'title' => 'Range',
                                            'type' => 'range',
                                            'name' => 'default[range]',
                                            'range' => [0, 100]
                                        ],
                                        'set' => [
                                            'title' => 'Set',
                                            'description' => 'Example field set.',
                                            'type' => 'set',
                                            'content' => ""
                                        ],
                                        'source' => [
                                            'title' => 'Source',
                                            'type' => 'source',
                                            'name' => 'default[source]'
                                        ],
                                        'text' => [
                                            'title' => 'Text',
                                            'type' => 'text',
                                            'name' => 'default[text]'
                                        ],
                                        'time' => [
                                            'title' => 'Time',
                                            'type' => 'time',
                                            'name' => 'default[time]'
                                        ],
                                        'toggle' => [
                                            'title' => 'Toggle',
                                            'hint' => 'Toggle hint.',
                                            'type' => 'toggle',
                                            'name' => 'default[toggle]'
                                        ],
                                        'u-r-l' => [
                                            'title' => 'URL',
                                            'type' => 'u-r-l',
                                            'name' => 'default[u-r-l]'
                                        ]
                                    ],
                                    'stack' => 10
                                ]
                            ],
                            'stack' => 10
                        ]
                    ]
                ]
            ]
        ];
        $_['lot']['desk']['lot']['form']['lot'][2] = [];
        return $_;
    }
}
