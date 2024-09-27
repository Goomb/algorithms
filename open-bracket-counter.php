<?php

require_once 'structures/stack.php';

function analyzeBracket(string $s): string
{
    $stack = new Stack();
    $openBrackets = ['(', '[', '{'];
    
    for ($i = 0; $i < strlen($s); $i++) {
        if (in_array($s[$i], $openBrackets)) {
            $stack->push($s[$i]);
            continue;
        }

        $closeIndex = array_search($s[$i], [')', ']', '}']);
        if ($closeIndex !== false && ($stack->isEmpty() || $stack->pop() !== $openBrackets[$closeIndex])) {
            return 'Brackets is broken!';
        }
    }

    return $stack->isEmpty() ? 'Brackets is fine!' : 'Brackets is broken!';
}

$result = analyzeBracket('(1+2*3*(1+2)+1)');
var_dump($result, $result === 'Brackets is fine!');

$result = analyzeBracket('(1+2*3*{(1+2)}+1)');
var_dump($result, $result === 'Brackets is fine!');

$result = analyzeBracket('(1+2*3*((1+2)+1)');
var_dump($result, $result === 'Brackets is broken!');

$result = analyzeBracket('(1+2*3*((1+2)))+1)');
var_dump($result, $result === 'Brackets is broken!');