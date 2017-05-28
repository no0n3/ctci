<?php

function removeDuplicateChars($s) {
    $a = str_split($s);
    $l = strlen($s);
    $i = 0;
    while($i < $l) {
        $b = false;
        for ($j = 0; $j < $i; $j++) {
            if ($a[$j] === $a[$i]) {
                $b = true;
            }
        }
        if ($b) {
            for ($j = $i; $j < $l - 1; $j++) {
                $a[$j] = $a[$j + 1];
            }
            $l--;
        } else {
            $i++;
        }
    }
    $r = '';
    for ($i = 0; $i < $l; $i++) {
        $r .= $a[$i];
    }
    return $r;
}

var_dump('abc dsg asd', removeDuplicateChars('abc dsg asXdtI'));
