<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    
    $plus = 0;
    $minus = 0;
    $zero = 0;

    foreach ($arr as &$item) {
        if ($item > 0)
            $plus++;
        if ($item < 0)
            $minus++;
        if ($item == 0)
            $zero++;
    }

    $plus = $plus / count($arr);
    $minus = $minus / count($arr);
    $zero = $zero / count($arr);

    echo number_format($plus, 6, '.', '')."\n";
    echo number_format($minus, 6, '.', '')."\n";
    echo number_format($zero, 6, '.', '')."\n";
    

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
