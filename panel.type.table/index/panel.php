<?php namespace x\panel\type;

function table($value, $key) {
    if (empty($value['lot'])) {
        return;
    }
    // TODO: Consider the `sort` key
    // $sort = !empty($value['sort']);
    // if (!\is_array($sort)) {
    //     $sort = [$sort ? 1 : -1, 'id'];
    // }
    $columns = [];
    $rows = [];
    foreach ($value['lot'] as $v) {
        $columns = \array_keys($v);
        $rows[] = \array_values($v);
    }
    $out = '<table class="table can:sort">';
    $out .= '<thead>';
    $out .= '<tr><th>' . \implode('</th><th>', $columns) . '</th></tr>';
    $out .= '</thead>';
    $out .= '<tbody>';
    foreach ($rows as $row) {
        $out .= '<tr><td>' . \implode('</td><td>', $row) . '</td></tr>';
    }
    $out .= '</tbody>';
    $out .= '</table>';
    return $out;
}

$path = \stream_resolve_include_path(__DIR__ . \DS . '..' . \DS . 'lot' . \DS . 'asset');
$z = \defined("\\DEBUG") && \DEBUG ? '.' : '.min.';

$_['asset']['panel.type.table:css'] = [
    'id' => false,
    'path' => $path . \DS . 'css' . \DS . 'index' . $z . 'css',
    'stack' => 20.1
];

$_['asset']['panel.type.table:js'] = [
    'id' => false,
    'path' => $path . \DS . 'js' . \DS . 'index' . $z . 'js',
    'stack' => 20.1
];