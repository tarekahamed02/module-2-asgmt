<?php


function printEvenNumbers() {
    for ($i = 1; $i <= 20; $i++ ) {
        if($i%2==0){
            echo $i . ' ';
        }
        
    }
}

// Call the function to print even numbers
printEvenNumbers();
