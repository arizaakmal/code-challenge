<?php

// Ori Code
/*
function FirstReverse($str)
{
    $result = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $result = $result . $str[$i];
    }

    return $result;
}
*/

// Alternative Code
function FirstReverse($str)
{

    // code goes here
    return strrev($str);
}

print_r(FirstReverse("abcde asdsada"));
