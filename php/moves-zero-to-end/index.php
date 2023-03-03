<?php

function moveZeros(array $items)
{
    // your code here
    //tampilkan array dalam foreach
    $arr = [];
    $count = 0;
    foreach ($items as $item) {
        //jika item tidak sama dengan 0
        if ($item != 0) {
            //masukkan item pada arr
            $arr[] = $item;
        } else {
            $count++;
        }
    }

    for ($i = 0; $i < $count; $i++) {
        $arr[] = 0;
    }
    return $arr;
}

print_r(moveZeros(["a", 0, 0, "b", "c", "d", 0, 1, 0, 1, 0, 3, 0, 1, 9, 0, 0, 0, 0, 9]));
