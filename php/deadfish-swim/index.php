<?php
function parse($data)
{
    $d = str_split($data);
    $value = 0;
    $output = [];
    foreach ($d as $k) {
        switch ($k) {
            case 'i':
                $value++;
                break;
            case 'd':
                $value--;
                break;
            case 's':
                $value = pow($value, 2);
                break;
            case 'o':
                $output[] = $value;
                break;
            default:
                break;
        }
    }

    return $output;
    //return [];
}

var_dump(parse("iiioiidso"));
