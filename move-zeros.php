<?php

function moveZeros(array $items): array
{
    $main = [];
    $zeros = 0;
    foreach ($items as $item) {
        if ($item !== 0 && $item !== 0.0) {
            $main[] = $item;
        } else {
            $zeros++;
        }
    }

    return [...$main, ...array_fill(0, $zeros, 0)];
}

$result = moveZeros([1,2,0,1,0,1,0,3,0,1]);
var_dump($result === [1,2,1,1,3,1,0,0,0,0]);

$result = moveZeros(["a",0,0,"b",null,"c","d",0,1,false,0,1,0,3,[],0,1,9,0,0,0,0,9]);
var_dump($result === ["a","b",null,"c","d",1,false,1,3,[],1,9,9,0,0,0,0,0,0,0,0,0,0]);

$result = moveZeros([1,2,0,1,0,1,0,3,0,1]);
var_dump($result === [1,2,1,1,3,1,0,0,0,0]);