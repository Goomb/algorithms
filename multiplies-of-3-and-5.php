<?php

function solution($number){
    return $number < 0 ? 0 : array_sum(array_map(fn($a) => $a % 3 === 0 || $a % 5 === 0 ? $a : 0, range(0, $number - 1)));
}

$result = solution(10);
var_dump($result, $result === 23);