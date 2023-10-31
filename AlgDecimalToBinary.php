<?php

function decimalToBinary($decimalValue) {
    if ($decimalValue == 0 ) {
        return "0";
    }
    $binary = "";
    while($decimalValue > 0) {
        $bit = $decimalValue % 2;
        $binary = $bit.$binary;
        $decimalValue = floor($decimalValue/2);
    }
    return $binary;
}

$decimalValue = 13;
$result = decimalToBinary($decimalValue);
echo "The Decimal value: $decimalValue in binary format is: $result"; 