<?php

//find missing letter
function findMissingLetter(array $array): string
{
    $result = "";
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($i == count($array) - 1) {
            $result = $result;
        } else {
            $char = ord($array[$i + 1]) - ord($array[$i]);
            if ($char == 1) {
                $result = $result;
            } else {
                $result = chr(ord($array[$i]) + 1);
            }
        }
    }
    return $result;
}

echo findMissingLetter(["a", "b", "c", "d", "f"]);
echo "\n";
echo findMissingLetter(["O", "Q", "R", "S"]);
