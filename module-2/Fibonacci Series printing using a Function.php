<?php

function generateAndPrintFibonacci($count) {
    $fibonacciSeries = [];

    for ($i = 0; $i < $count; $i++) {
        if ($i <= 1) {
            $fibonacciSeries[] = $i;
        } else {
            // Calculate the next Fibonacci number by summing the previous two
            $nextFibonacci = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
            $fibonacciSeries[] = $nextFibonacci;
        }
    }

    // Print the Fibonacci series
    foreach ($fibonacciSeries as $number) {
        echo $number . ' ';
    }
}

// Call the function to print the first 15 Fibonacci numbers
generateAndPrintFibonacci(15);
