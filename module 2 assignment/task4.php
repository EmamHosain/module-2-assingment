<?php 
/*
Task 4: Fibonacci Series printing using a Function
Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.
*/

function printFibonacci($count) {
    $fib = [0, 1]; 

    for ($i = 2; $i < $count; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2]; 
    }

    
    for ($i = 0; $i < $count; $i++) {
        echo $fib[$i] . " ";
    }
}

printFibonacci(15);
