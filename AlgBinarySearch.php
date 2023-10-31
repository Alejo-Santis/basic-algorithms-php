<?php

function binarySearch($list, $element) {

    $left = 0;
    $right = count($list)-1;

    while ($left <= $right) {       
        $half= floor(($left + $right)/2);

        if($list[$half] == $element) {
            return $half;
        }
        if($list[$half] < $element) {
            $left = $half + 1;
        } else {
            $right = $half - 1;
        }
    }
}

$list = [10,4, 3, 5, 8, 1, 7 ];
sort($list);
$elementSearch = 1;
$result = binarySearch($list, $elementSearch);

echo "List of elements: ";
print_r($list);

if ($result != -1) {
    echo "El elemento ". $elementSearch." se encontró en la posición ". $result;
} else {
    echo "El elemento ". $elementSearch." no se encontró en la lista";
}
