<?php

function spinWords(string $str): string {
  return implode(' ', array_map(function ($word) {
    return strlen($word) >= 5 ? strrev($word) : $word;
  }, explode(' ', $str)));
}

$result = spinWords('Welcome');
var_dump($result, $result === 'emocleW');

$result = spinWords('Hey fellow warriors');
var_dump($result, $result === 'Hey wollef sroirraw');