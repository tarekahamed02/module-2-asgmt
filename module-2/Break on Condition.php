<?php

function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0;
$maxValue = 100;

for ($i = 0; $count < 10; $i++) {
    $fib = fibonacci($i);

    if ($fib > $maxValue) {
        break; 
    }

    echo $fib . ' ';
    $count++;
}
