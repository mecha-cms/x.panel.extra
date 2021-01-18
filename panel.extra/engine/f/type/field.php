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
    $out['content'][2]['type'] = 'text';
    if (!empty($value['state'])) {
        $out['content'][2]['data-state'] = \json_encode($value['state']);
    }
    \_\lot\x\panel\_set_class($out['content'][2], [
        'input' => true
    ]);
    return \_\lot\x\panel\type\field($out, $key);
}
