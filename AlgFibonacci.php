<?php

function fibonacci($number) {

    $fibonacciArray = [];

    if ($number < 1) {
        return $fibonacciArray;
    }
    $fibonacciArray[0] = 0;

    if ($number > 1) {
        $fibonacciArray[1] = 1;
    }
    for ($i = 2; $i < $number; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i -1] + $fibonacciArray[$i -2];
    }
    return $fibonacciArray;
}

$number = 10;
$fibonacciSequence = fibonacci($number);

echo "Fibonacci sequence of $number, values: " . implode(", ", $fibonacciSequence);