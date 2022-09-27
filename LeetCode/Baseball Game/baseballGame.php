<?php
class Solution {
    /**
     * @param String[] $ops
     * @return Integer
     */

     function calPoints($ops){

        $score = (array) null;

        foreach ($ops as $key => $value) {
            if (is_numeric($value)) {
                $score[] = $value;
            } else if ($value == 'C' || $value == 'c') {
               array_pop($score);
            } else if ($value == 'D' || $value == 'd') {
                $score[] = $score[count($score)-1] * 2;
            } else if ($value == '+') {
                $score[] = $score[count($score)-1] + $score[count($score)-2];
            }
        }
        



     }
}

/* read inputs */

$ops = explode(' ', readline());

/* solution */
$solution = new Solution();
$output = $solution->calPoints($ops);

/* print output */
echo $output;