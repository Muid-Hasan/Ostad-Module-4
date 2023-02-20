<?php

function concatenate($string1, $string2) {
    $length1 = strlen($string1);
    $length2 = strlen($string2);
    $result = '';

    for ($i = 0; $i < $length1 + $length2; $i++) {
        if ($i < $length1) {
            $result .= $string1[$i];
        } else {
            $result .= $string2[$i - $length1];
        }
    }

    return $result;
}


$string1 = "Muid";
$string2 = "Hasan";
$result = concatenate($string1, $string2);
echo $result; 
