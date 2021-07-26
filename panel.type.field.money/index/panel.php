<?php namespace x\panel\type\field;

function money(array $value, $key) {
    $state = \array_replace_recursive(['join' => '.'], $value['state'] ?? []);
    $currency = $value['currency'] ?? null;
    if ($currency) {
        $value['value-after'] = $currency;
    }
    if (!isset($value['hint'])) {
        $value['hint'] = \implode($state['join'], ['10', '000']);
    }
    if (!isset($value['pattern'])) {
        $value['pattern'] = "^\\d+(?:" . \x($state['join']) . "\\d{3})*$";
    }
    $out = \x\panel\to\field($value, $key);
    $out['content'][0] = 'input';
    $out['content'][1] = false;
    $out['content'][2]['name'] = ($n = $value['name'] ?? $key) . '[0]';
    $out['content'][2]['type'] = 'text';
    \x\panel\_set_class($out['content'][2], [
        'input' => true
    ]);
    $out['data'][$n . '[1]'] = $currency;
    return \x\panel\type\field($out, $key);
}

$_['asset'][__DIR__ . DS . '..' . DS . 'lot' . DS . 'asset' . DS . 'js' . DS . 'money.js'] = [
    'stack' => 20
];
