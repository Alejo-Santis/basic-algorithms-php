<?php

function factorial($number) {
    if ($number < 0) {
        return "Can't calculate the factorial of a negative number!";
    } elseif ($number == 0 || $number == 1) {
        return 1;
    } else {
        $result = 1;
        for ($i = 2; $i <= $number; $i++) {
            $result *= $i; 
        }
        return $result;
    }
}

$number = 7;
$factorial = factorial($number);

echo "The factorial of the number $number is: " . $factorial;