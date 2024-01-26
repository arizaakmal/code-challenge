<?php
function detect_pangram($string)
{

    for ($i = 65; $i <= 90; $i++) {
        if (!preg_match('/' . chr($i) . '/i', $string)) {
            return false;
        }
    }
    return true;
}

detect_pangram("The quick brown fox jumps over the lazy dog.");
