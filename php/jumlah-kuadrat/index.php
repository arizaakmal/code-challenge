<?php

//TODO: Return the Square of Sum of Numbers given
//Example:
//Input:
//5
//1
//2
//3
//4
//5
//Output:
//225


function squareOfSum($n, $v)
{
    $sum = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum += $v[$i];
    }
    return $sum * $sum;
}


// Input
echo "Enter the number of elements: ";
$n = (int)readline();
echo "Enter the elements:\n";

$v = array();
for ($i = 0; $i < $n; $i++) {
    $v[$i] = (int)readline();
}

// Output
echo squareOfSum($n, $v);
