<?php

function isAnagram1($s1, $s2) {
    $a1 = str_split($s1);
    $a2 = str_split($s2);

    sort($a1, SORT_STRING);
    sort($a2, SORT_STRING);

    return implode('', $a1) === implode('', $a2);
}

function isAnagram2($s1, $s2) {
    if (strlen($s1) !== strlen($s2)) {
        return false;
    }

    $a1 = str_split($s1);
    $a2 = str_split($s2);
    $a = [];
    foreach ($a1 as $c) {
        if (isset($a[$c])) {
            $a[$c]++;
        } else {
            $a[$c] = 1;
        }
    }

    foreach ($a2 as $c) {
        if (!isset($a[$c])) {
            return false;
        } else if (0 === $a[$c]) {
            return false;
        } else {
            $a[$c]--;
        }
    }

    foreach ($a as $n) {
        if (0 > $n) {
            return false;
        }
    }

    return true;
}

$s1 = 'abcd';
$s2 = 'dacb';

var_dump(isAnagram1($s1, $s2));
var_dump(isAnagram2($s1, $s2));
