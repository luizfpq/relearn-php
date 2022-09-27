<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {

    $arr_last_index = count($arr) - 1;
    $sum_right = 0;
    $sum_left = 0;

    for ($i=0; $i <= $arr_last_index ; $i++) { 
        $sum_left += $arr[$i][$i];
        $sum_right += $arr[$i][$arr_last_index - $i];
    }

    return abs($sum_right - $sum_left);
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);

