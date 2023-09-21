<?php 
/*
Task 3: Break on Condition
Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement.
*/


function fibonacci() {
    $fib = [0, 1];

    for ($i = 2; $i < 10; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
        
        
        if ($fib[$i] > 100) {
            break;
        }

       
        echo $fib[$i] . " ";
    }
}


fibonacci();
