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

            switch ($value) {
                case '(':
                    $stack[] = $value;
                    break;
                case '[':
                    $stack[] = $value;
                    break;
                case '{':
                    $stack[] = $value;
                    break;
                case ')':
                    $last_item = array_pop($stack);
                    if ($last_item != '(')
                        return false;
                    break;
                case ']':
                    $last_item = array_pop($stack);
                    if ($last_item != '[')
                        return false;
                    break;
                case '}':
                    $last_item = array_pop($stack);
                    if ($last_item != '{')
                        return false;
                    break;
                default:
                    # code...
                    break;
            }
        }

        if ($stack == NULL) {
            return true;
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
