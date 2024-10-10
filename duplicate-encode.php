<?php

function duplicate_encode($word){
	$result = '';
  foreach(str_split($word) as $char) {
    $result .= count_chars($char, 1) === 1 ? ')' : '(';
    // if (count_chars($char, 1) === 1) {
    //   $result .= ')';
    // } else {
    //   $result .= '(';
    // }
  }
  
  return $result;
}

$result = duplicate_encode('din');
var_dump($result, $result === '(((');

$result = duplicate_encode('recede');
var_dump($result, $result === '()()()');