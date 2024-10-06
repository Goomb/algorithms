<?php

require_once 'stack.php';

function simpleStockSpan(array $quotes)
{
    $spans = [];

    for ($i = 0; $i < count($quotes); $i++) {
        $k = 1;
        $spanEnd = false;

        while ($i - $k >= 0 && !$spanEnd) {
            if ($quotes[$i - $k] <= $quotes[$i]) {
                $k++;
            } else {
                $spanEnd = true;
            }
        }

        $spans[$i] = $k;
    }

    return $spans;
}

function stackStockSpan(array $quotes)
{
    $spans = [];
    $spans[] = 1;
    $stack = new Stack([0]);

    for ($i = 0; $i < count($quotes); $i++) {
        while (!$stack->isEmpty() && $quotes[$stack->top()] <= $quotes[$i]) {
            $stack->pop();
        }

        $spans[$i] = $stack->isEmpty() ? $i + 1 : $i - $stack->top();
        $stack->push($i);
    }

    return $spans;
}

// $result = simpleStockSpan([7, 11, 8, 6, 3, 8, 9]);
// var_dump($result === [1, 2, 1, 1, 1, 4, 5]);

$result = stackStockSpan([7, 11, 8, 6, 3, 8, 9]);
var_dump($result === [1, 2, 1, 1, 1, 4, 5]);