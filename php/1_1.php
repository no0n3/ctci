<?php

function isWithUniqueChars($s) {
    $slen = strlen($s);
    $a = array_fill(0, 256, null);
    for ($i = 0; $i < $slen; $i++) {
        $c = $s[$i];
        if ($a[ord($c)]) {
            return false;
        }
        $a[ord($c)] = true;
    }
    return true;
}

var_dump(
        isWithUniqueChars('dashg kjczx'), isWithUniqueChars('dashgh xkj czx')
);
