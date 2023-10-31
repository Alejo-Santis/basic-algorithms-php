<?php

function findMaxMin($list) {
    $counter = count($list);
    if ($counter === 0) { return null; }
    $max = $list[0];
    $min = $list[0];
    for($i = 1; $i < $counter; $i++) {
        if ($list[$i] > $max) {
            $max = $list[$i];
        }
        if ($list[$i] < $min) {
            $min = $list[$i];
        }
    }
    return ["max" => $max, "min" => $min];
}

$list = [5, 3, 1, 4, 2];
$result = findMaxMin($list);

echo "Max value: " . $result["max"] . "\n";
echo "Min value: " . $result["min"];