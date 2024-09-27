<?php

function revertPolish(array $data): int
{
    $operators = ['+', '-', '*'];
    $stack = [];
    foreach($data as $operand) {
        if (!in_array($operand, $operators)) {
            $stack[] = $operand;
        } else {
            $stack[] = match ($operand) {
                '+' => array_pop($stack) + array_pop($stack),
                '-' => -1 * array_pop($stack) + array_pop($stack),
                '*' => array_pop($stack) * array_pop($stack),
            };
        }
    }

    return array_pop($stack);
}

$result = revertPolish([1, 2, '+']);
var_dump($result === 3);

$result = revertPolish([1, 2, 3, '*', '+']);
var_dump($result === 7);

$result = revertPolish([1, 2, 3, '*', '+', 2, '-']);
var_dump($result === 5);