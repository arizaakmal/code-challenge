<?php

// function QuestionsMarks($str)
// {

//     // code goes here
//     for ($i = 0; $i < strlen($str); $i++) {
//         if ($str[$i] === "?" && $str[$i - 1] === "?" && $str[$i - 2] === "?") {
//             return var_export(true, true);
//         }
//     }

//     return var_export(false, false);
// }

function QuestionsMarks($str)
{

    // code goes here
    $length = strlen($str);
    //echo $length;
    $start = 0;
    $stop = 0;
    $nb_q_m = 0;
    $at_least_one = false;

    for ($i = 0; $i < $length - 1; $i++) {

        if (is_numeric($str[$i])) {
            //echo '-'.$str[$i].'-';
            $value = $str[$i];
            $nb_q_m = 0;
            for ($j = $i + 1; $j < $length; $j++) {
                if (is_numeric($str[$j])) {
                    if ($str[$j] + $value == 10) {
                        $at_least_one = true;
                        if ($nb_q_m != 3) return "false";
                        else break;
                    }
                    // else return "false";
                } else if ($str[$j] == '?') $nb_q_m++;
            }
        }
    }

    if ($at_least_one) return "true";
    else return "false";

    return $str;
}

print_r(QuestionsMarks("9???1???9??1???9"));
