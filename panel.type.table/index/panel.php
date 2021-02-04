<?php namespace _\lot\x\panel\type;

function table(array $value, $key) {
    if (empty($value['lot'])) {
        return;
    }
    $columns = [];
    $rows = [];
    foreach ($value['lot'] as $v) {
        $columns = \array_keys($v);
        $rows[] = \array_values($v);
    }
    $out = '<table class="table">';
    $out .= '<thead><tr><th>' . \implode('</th><th>', $columns) . '</th></tr></thead>';
    $out .= '<tbody>';
    foreach ($rows as $row) {
        $out .= '<tr><td>' . \implode('</td><td>', $row) . '</td></tr>';
    }
    $out .= '</tbody>';
    $out .= '</table>';
    return $out;
}

