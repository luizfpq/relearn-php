<?php



/*
 * Complete the 'flippingMatrix' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY matrix as parameter.
 */

function flippingMatrix($matrix) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$q = intval(trim(fgets(STDIN)));

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    $n = intval(trim(fgets(STDIN)));

    $matrix = array();

    for ($i = 0; $i < (2 * $n); $i++) {
        $matrix_temp = rtrim(fgets(STDIN));

        $matrix[] = array_map('intval', preg_split('/ /', $matrix_temp, -1, PREG_SPLIT_NO_EMPTY));
    }

    $result = flippingMatrix($matrix);

    fwrite($fptr, $result . "\n");
}

fclose($fptr);
