<?php

function find_uniq($a): int
{
    number_format($a[0], 2) == number_format($a[1], 2) ? $a = array_slice($a, 2) : $a = array_slice($a, 1);
    $a = array_count_values($a);
    $a = array_keys($a, 1);


    return $a[0];
}



print_r(find_uniq([6, 6, 0.55, 6]));
