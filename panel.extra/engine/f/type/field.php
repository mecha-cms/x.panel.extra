<?php namespace _\lot\x\panel\type\field;

function money(array $value, $key) {
    $state = \array_replace_recursive(['join' => '.'], $value['state'] ?? []);
    $currency = $value['currency'] ?? null;
    if ($currency) {
        $value['after'] = $currency;
    }
    if (!isset($value['hint'])) {
        $value['hint'] = \implode($state['join'], ['10', '000']);
    }
    $out = \_\lot\x\panel\to\field($value, $key);
    $out['content'][0] = 'input';
    $out['content'][1] = false;
    $out['content'][2]['name'] = ($n = $value['name'] ?? $key) . '[0]';
    $out['content'][2]['type'] = 'text';
    \_\lot\x\panel\_set_class($out['content'][2], [
        'input' => true
    ]);
    if (!empty($value['state'])) {
        $out['content'][2]['data-state'] = \json_encode($value['state']);
    }
    $out = \_\lot\x\panel\type\field($out, $key);
    $out .= '<input name="' . $n . '[1]" type="hidden" value="' . $currency . '">';
    return $out;
}

function data(array $value, $key) {
    $values = $value['values'] ?? $value['value'];
    $cols = [];
    $rows = [];
    foreach ($values as $v) {
        $cols = \array_keys($v);
        $rows[] = \array_values($v);
    }
    $out = '<table class="table">';
    $out .= '<thead><tr><th>' . \implode('</th><th>', $cols) . '</th></tr></thead>';
    $out .= '<tbody>';
    foreach ($rows as $row) {
        $out .= '<tr><td>' . \implode('</td><td>', $row) . '</td></tr>';
    }
    $out .= '</tbody>';
    $out .= '</table>';
    return \_\lot\x\panel\type\field(['content' => $out], $key);
}
