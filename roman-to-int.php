<?php

function romanToInt($s) {
    $nums = ['M' => 1000, 'D' => 500, 'C' => 100, 'L' => 50, 'X' => 10, 'V' => 5, 'I' => 1];
    $elements = str_split($s);
    for ($i = 0; $i < count($elements); $i++) {
        if ($i && $elements[$i-1] < $nums[$elements[$i]]) {
            $elements[$i-1] = -$elements[$i-1];
        }
        $elements[$i] = $nums[$elements[$i]];
    }

    return array_sum($elements);
}