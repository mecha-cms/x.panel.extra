<?php namespace x\panel\type\field;

function money(array $value, $key) {
    $value['state'] = $state = \array_replace_recursive([
        'join' => '.',
        'step' => 1000
    ], $value['state'] ?? []);
    $currency = $value['currency'] ?? null;
    if ($currency) {
        $value['value-after'] = $currency;
    }
    $vv = \strrev(\implode($state['join'], \str_split(\strrev((string) ($v = $value['value'] ?? "")), 3)));
    if (!isset($value['hint'])) {
        $value['hint'] = "" !== $vv ? $vv : \implode($state['join'], ['10', '000']);
    }
    if (!isset($value['pattern'])) {
        $value['pattern'] = "^\\d+(?:" . \x($state['join']) . "\\d{3})*$";
    }
    $out = \x\panel\to\field($value, $key);
    $out['content'][0] = 'input';
    $out['content'][1] = false;
    $out['content'][2]['type'] = 'text';
    $out['content'][2]['value'] = $vv;
    \x\panel\_set_class($out['content'][2], [
        'input' => true
    ]);
    unset($out['content'][2]['name']);
    $out['content'][2]['data-name'] = ($n = $value['name'] ?? $key);
    $out['data'][$n] = [$v, $currency];
    return \x\panel\type\field($out, $key);
}

$z = \defined("\\DEBUG") && \DEBUG ? '.' : '.min.';
$_['asset']['panel.type.field.money'] = [
    'id' => false,
    'path' => __DIR__ . \DS . '..' . \DS . 'lot' . \DS . 'asset' . \DS . 'js' . \DS . 'index' . $z . 'js',
    'stack' => 20.1
];
