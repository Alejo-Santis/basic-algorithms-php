<?php

function celsiusToFahrenheit($value) {
    $fahrenheit = ($value * 9/5) + 32;
    return $fahrenheit;
}

function fahrenheitToCelsius($value) {
    $celsius = ($value - 32 ) * 5/9;
    return $celsius; 
}

$celsius = 25;
$resultFahrenheit = celsiusToFahrenheit($celsius);
echo "$celsius °C is equal to $resultFahrenheit °F \n" ;

$fahrenheit = 77;
$resultCelsius = fahrenheitToCelsius($fahrenheit);
echo "$fahrenheit °F is equal to $resultCelsius °C";