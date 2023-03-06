<?php

//Ori Code
/*
function FindIntersection($strArr)
{
    $str1 = explode(", ", $strArr[0]);
    $str2 = explode(", ", $strArr[1]);

    $intersect = array_intersect($str1, $str2);
    $result = implode(",", $intersect);

    if (!$intersect) return var_export(false, false);
    return $result;
}
*/

//Alternative Code
function FindIntersection($strArr)
{
    $strArr = implode(
        ',',

        array_intersect(
            explode(', ', $strArr[0]),
            explode(', ', $strArr[1])
        )

    );

    return $strArr;
}


print_r(FindIntersection(array("1, 2, 3, 4, 5", "1, 2, 8, 9, 10")));
