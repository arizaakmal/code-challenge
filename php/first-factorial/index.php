<?php


function FirstFactorial($num)
{

    // code goes here
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}

print_r(FirstFactorial(5));
