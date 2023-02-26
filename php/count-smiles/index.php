<?php

// countSmileys([':)', ';(', ';}', ':-D']);       // should return 2;
// countSmileys([';D', ':-(', ':-)', ';~)']);     // should return 3;
// countSmileys([';]', ':[', ';*', ':$', ';-D']); // should return 1;

// Ori Code
function count_smileys($arr): int
{
    $pattern = '/^[:;][-~]?[)D]$/';
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if (preg_match($pattern, $arr[$i])) {
            $count++;
        }
    }
    return $count;
}

// Alternative Code
/*
function count_smileys($arr): int {
    return preg_match_all("/[:;][-~]?[\)D]/", implode(",", $arr));
  }
*/

/*
function count_smileys($arr): int {
  return count(preg_grep('/[:;][-~]?[D)]/',$arr));
}
*/

echo count_smileys([':)', ';(', ';}', ':-D']);
echo "\n";
echo count_smileys([';D', ':-(', ':-)', ';~)']);
echo "\n";
echo count_smileys([';]', ':[', ';*', ':$', ';-D']);
