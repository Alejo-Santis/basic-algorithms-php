<?php

function bubbleSort($list) {
    $count = count($list); // determinar el tamaño de la lista
    $changes = true; // dato de tipo de cambio
    while ($changes) {       
        $changes = false; // por defecto se coloca a false
        for ($i = 0; $i < $count - 1; $i++) {
            if ($list[$i] > $list[$i + 1]) {
                // Hacemos el proceso denomiado intercambio de datos
                $temp = $list[$i]; // Almacenar el elemento actual de la lista
                $list[$i] = $list[$i + 1]; // Asignamos el valor siguiente del elemento al elemento actual de la lista.
                $list[$i + 1] = $temp; // Asignamos el valor almacenado en temp al siguiente elemento de la lista.
                $changes = true;
            }
        }
    }
    return $list;
}

$list = [5,4,3,1,6,2];

$orderList = bubbleSort($list);

echo "Order List: " . implode(", ", $orderList);