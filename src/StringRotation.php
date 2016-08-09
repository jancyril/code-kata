<?php

namespace Janitor;

/**
 * Given a string and an array of strings, determine if the given 
 * array contains all possible rotations of the input string.
 */
class StringRotation
{
    public function check($string, $comparison = [])
    {
        $count = 0;

        for ($x = 0; $x < strlen($string); $x++) {
            $newString = substr($string, $x) . substr($string, 0, $x - strlen($string));

            foreach ($comparison as $compare) {
                if ($newString == $compare) {
                    $count++;
                    break;
                }
            }
        }

        return $count == strlen($string) ?:false;
    }
}
