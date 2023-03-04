<?php


// Ori Code
/*
function LongestWord($sen)
{

    // code goes here
    $count = 0;
    $longest = 0;
    $words = explode(" ", $sen);
    $result = '';
    for ($i = 0; $i < strlen($sen); $i++) {
        if ($sen[$i] !== " " && !ctype_punct($sen[$i])) {
            $count++;
            $word[$i] = $sen[$i];
            if ($i === strlen($sen) - 1) {
                if ($longest < $count) {
                    $longest = $count;
                }
                $count = 0;
            }
        } else {
            if ($longest < $count) {
                $longest = $count;
            }
            $count = 0;
        }
    }

    foreach ($words as $word) {
        if (strlen($word) === $longest) {
            $result = $word;
            if ($result !== '') {
                break;
            }
        }
    }

    return $result;
}
*/

// Alternative Code

function LongestWord($sen)
{

    // code goes here

    $textarray = str_word_count($sen, 1);
    $mapping = array_combine($textarray, array_map('strlen', $textarray));
    $keys = array_keys($mapping, max($mapping));
    return $keys[0];
}


print_r(LongestWord("Radi!&! dasasdasa sdfdsdvfg"));
