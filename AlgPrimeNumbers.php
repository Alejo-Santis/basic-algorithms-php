<?php

function isPrime ($number) {
    if ($number <= 1) { 
        return false; 
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

$number = 18;

if (isPrime($number)) {
    echo "The number $number is prime!";
} else {
    echo "The number $number is not prime!";
}