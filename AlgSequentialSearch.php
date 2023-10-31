<?php

function sequentialSearch($list, $element) {

    $length = count($list);
    for ($i = 0; $i < $length; $i++) {
        if ($list[$i] == $element) {
            return $i;
        }
    }
    return -1;
}

$list = [10,4, 3, 5, 8, 1, 7 ];
$elementSearch = 5;
$result = sequentialSearch($list, $elementSearch);

echo "List of elements: ";
print_r($list);

if ($result != -1) {
    echo "El elemento ". $elementSearch." se encontró en la posición ". $result;
} else {
    echo "El elemento ". $elementSearch." no se encontró en la lista";
}

?>