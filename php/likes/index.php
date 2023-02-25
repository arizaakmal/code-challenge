<?php

// []                                -->  "no one likes this"
// ["Peter"]                         -->  "Peter likes this"
// ["Jacob", "Alex"]                 -->  "Jacob and Alex like this"
// ["Max", "John", "Mark"]           -->  "Max, John and Mark like this"
// ["Alex", "Jacob", "Mark", "Max"]  -->  "Alex, Jacob and 2 others like this"


function likes($names)
{
    // Your code here...
    if ($names == []) {
        return "no one likes this";
    } else if (count($names) == 1) {
        return $names[0] . " likes this";
    } else if (count($names) == 2) {
        return $names[0] . " and " . $names[1] . " like this";
    } else if (count($names) == 3) {
        return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
    } else if (count($names) > 3) {
        return $names[0] . ", " . $names[1] . " and " .  count($names) - 2 . " others like this";
    }
}

echo likes([]);
echo "\n";
echo likes(["Abraham"]);
echo "\n";
echo likes(["Abraham", "Joko"]);
echo "\n";
echo likes(["Abraham", "Joko", "Peter"]);
echo "\n";
echo likes(["Abraham", "Joko", "Peter", "Bowo"]);
echo "\n";
echo likes(["Abraham", "Joko", "Peter", "Bowo", "Ayumi"]);
