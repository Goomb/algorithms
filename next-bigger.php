<?php

function nextBigger(string $n): int {
    // $number = $n;
    // for ($i = strlen($n) - 1; $i >= 0; $i--) {
    //     for ($j = $i - 1; $j >= 0; $j--) {
    //         $number = $n;
    //         $one = $number[$i];
    //         $two = $number[$j];
    //         $number[$i] = $two;
    //         $number[$j] = $one;
    //         var_dump('compare: ', $i, $j, $number);
    //         if ($n < $number) {
    //             return $number;
    //         }
    //     }   
    // }

    // for ($i = strlen($n) - 1; $i >= 1; $i--) {
    //     // for ($j = $i - 1; $j >= 0; $j--) {
    //         $number = $n;
    //         $one = $number[$i];
    //         $two = $number[$i - 1];
    //         $number[$i - 1] = $two;
    //         $number[$i] = $one;
    //         var_dump('compare: ', $i, $i - 1, $number);
    //         if ($n < $number) {
    //             return $number;
    //         }
    //     // }   
    // }


    $temp = $n[-1];
    for ($i = strlen($n) - 2; $i >= 0; $i--) {
        var_dump($n[$i]);
        if ($n[$i] < $temp) {
            var_dump($n[$i] . ' smaller ' . $temp);
            var_dump(substr($n, 0, $i) . ' and ' . substr($n, $i, strlen($n) - 1) . ' and ' . swap(substr($n, $i, strlen($n) - 1)));
            return substr($n, 0, $i) . swap(substr($n, $i, strlen($n) - 1));
        }
    }

    return -1;
}

function swap(string $str): string
{
    return substr($str, 1, strlen($str) - 1) . $str[0];
}

// $result = nextBigger(12);
// var_dump(12, $result, $result === 21);

// $result = nextBigger(513);
// var_dump(513, $result, $result === 531);

// $result = nextBigger(414);
// var_dump(414, $result, $result === 441);

$result = nextBigger(144);
var_dump(144, $result, $result === 414);