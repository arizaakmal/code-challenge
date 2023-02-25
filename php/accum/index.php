<?php

//Ori Code
function accum($s)
{
    // your code
    $count = 1;
    $result = "";
    for ($i = 0; $i < strlen($s); $i++) {
        if ($i == strlen($s) - 1) {
            $char = strtoupper($s[$i]);
            for ($j = 0; $j < $count - 1; $j++) {
                $char = $char . strtolower($s[$i]);
            }
        } else {
            $char = strtoupper($s[$i]);
            for ($j = 0; $j < $count - 1; $j++) {
                $char = $char . strtolower($s[$i]);
            }
            $char = $char . "-";
        }
        $count++;
        $result = $result . $char;
    }
    return $result;
}

// Alternative Code


// function accum($s)
// {
//     $parts = [];

//     foreach (str_split($s) as $index => $part) {
//         $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
//     }

//     return implode('-', $parts);
// }



echo accum("dResg");
