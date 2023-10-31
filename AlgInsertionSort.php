<?php

function insertionSort($list) {
    $counter = count($list);
    for($i = 1; $i < $counter; $i++) {
        $currentValue = $list[$i]; // Almacenamos el valor actual
        $j = $i - 1; // Creamos una variable auxiliar para el segundo ciclo
        while($j >= 0 && $list[$j] > $currentValue) {
            $list[$j + 1] = $list[$j]; // Asignamos al elemento siguiente el valor actual
            $j--;
        }
        $list[$j + 1] = $currentValue; // Asignamos al elemento siguiente el valor actual del recorrido en $i
    }
    return $list;
}

$list = [4, 1, 2, 36, 5, 7, 10 ];
$orderList = insertionSort($list);

echo "Order List: " . implode(", ", $orderList);