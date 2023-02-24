<?php

// Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

function XO($str)
{
    $x = 0;
    $o = 0;
    $bool = 3;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === 'x' || $str[$i] === 'X') {
            $x++;
        } else if ($str[$i] === 'o' || $str[$i] === 'O') {
            $o++;
        }
    }
    if ($x === $o) {
        return "true";
    } else {
        return "false";
    }
}



echo XO('xo');
echo "\n";
echo XO('XO');
echo "\n";
echo XO('xo0');
echo "\n";
echo XO('xxxoo');
echo "\n";
echo XO('xxOo');
