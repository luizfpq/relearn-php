<?php
class Solution
{
    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        $stack = (array) null;

        foreach (mb_str_split($s) as $value) {

            ($value == '[') ? 
        }
    }
}

/* read inputs */

$s = readline();

/* solution */
$solution = new Solution();
$output = $solution->isValid($s);

/* print output */
var_dump($output);
