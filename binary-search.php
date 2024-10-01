<?php

// function binarySearch(array $data, int $number): int
// {
//     $arrayLength = count($data);
//     if ($arrayLength === 1) {
//         return $data[0];
//     }

//     $middleIndex = ceil(count($data) / 2);
//     $middle = $data[$middleIndex];
//     if ($number > $middle) {
//         binarySearch(array_slice($data, 0, $middleIndex), $number);
//     } else {
//         binarySearch(array_slice($data, $middleIndex, count($data)), $number);
//     }
// }

function binarySearchBook(array $data, int $number): int
{
    $l = 0;
    $h = count($data);
    while ($l <= $h) {
        $m = floor(($l + $h) / 2);
        if ($data[$m] === $number) {
            return $m;
        }

        if ($data[$m] < $number) {
            $l = $m + 1;
        } else {
            $h = $m - 1;
        }
    }

    return -1;
}

function binarySearchRec(array $data, int $number): int
{
    if (count($data) === 1) {
        return $data[0] === $number ? $data[0] : -1;
    }
    
    $m = round(count($data) / 2);
    if ($data[$m] === $number) {
        return $data[$m];
    }
    return $data[$m] < $number ? 
        binarySearchRec(array_slice($data, $m, count($data)), $number) :
        binarySearchRec(array_slice($data, 0, $m), $number); 
}

// $result = binarySearchBook([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 7);
// var_dump('binarySearchBook', $result, $result === 6);

$result = binarySearchRec([1, 2, 3, 4, 5, 6, 7, 8, 9, 10],8);
var_dump('binarySearchBook', $result, $result === 6);