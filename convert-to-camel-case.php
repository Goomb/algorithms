<?php

function toCamelCase($str) {
    return implode(array_map(fn($k, $v) => $k === 0 ? $v : ucfirst($v), array_keys(preg_split('/[-_]/', $str)), preg_split('/[-_]/', $str)));
}

$result = toCamelCase("the_stealth_warrior");
var_dump($result);
$result = toCamelCase("the-Stealth-Warrior");
var_dump($result);
$result = toCamelCase("The-Stealth-Warrior");
var_dump($result);