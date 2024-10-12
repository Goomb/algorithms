<?php

function orderWeight($str) {
    $nums = explode(" ", $str);
    $arr = [];
    foreach ($nums as $num) {
        $arr[$num] = digitSum($num);
    }

    asort($arr, SORT_STRING);
    var_dump($arr);
    return implode(' ', array_keys($arr));
}

function digitSum(string $digit): string {
    $res = 0;
    for ($i = 0; $i < strlen($digit); $i++) {
        $res += $digit[$i];
    }

    return $res;
}

$result = orderWeight("103 123 4444 99 2000");
var_dump($result, $result === "2000 103 123 4444 99");