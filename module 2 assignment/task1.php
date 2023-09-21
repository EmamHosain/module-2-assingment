<?php 

/*
Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.
*/

function increment1(){
    for($i = 1; $i <= 20; $i++){
        if($i % 2== 0){
            $result = $i;
            echo $result . "\n";
        }

    }
}
increment1();


function increment2(){
   $i = 1;
   while($i <= 20){
    if($i % 2 == 0){
        $result = $i;
        echo $result . "\n";
    }
    $i++;
   }
}
increment2();


function increment3(){
    $i = 1;
       do{
        if($i % 2 == 0){
            echo $i . "\n";
        }
      
       $i++;
       } while($i <= 20);
   
   }
increment3();