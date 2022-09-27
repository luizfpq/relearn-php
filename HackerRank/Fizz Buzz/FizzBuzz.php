<?php
/*
 * Complete the 'fizzBuzz' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function fizzBuzz($n) {
   
    if($n % 3 == 0) {
        $result = "Fizz";
        if($n % 5 == 0)
        $result = "FizzBuzz";
    } 
    else if ($n % 5 == 0) {
        $result = "Buzz";
    } else {
        $result = $n;
    }


   echo $result."\n";
}

/* $n = intval(trim(fgets(STDIN)));*/

fizzBuzz(1);
fizzBuzz(2);
fizzBuzz(3);
fizzBuzz(4);
fizzBuzz(5);
fizzBuzz(6);
fizzBuzz(7);
fizzBuzz(8);
fizzBuzz(9);
fizzBuzz(10);
fizzBuzz(11);
fizzBuzz(12);
fizzBuzz(13);
fizzBuzz(14);
fizzBuzz(15);