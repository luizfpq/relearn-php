<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {

    $min = min($arr);
    $max = max($arr);
    $sum = 0;
    $sumMax = 0;
    $sumMin = 0;

    foreach ($arr as $value) {
        $sum += $value;
    }

    $sumMax = $sum - $min;
    $sumMin = $sum - $max;

    echo $sumMin." ".$sumMax;

}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
