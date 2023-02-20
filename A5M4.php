<?php

function SecondLeargestNumber($arr) {
    if (count($arr) < 2) {
        return null; 
    }

    $largest = $arr[0];
    $second_largest = null;

    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $second_largest = $largest;
            $largest = $arr[$i];
        } else if ($second_largest === null || ($arr[$i] > $second_largest && $arr[$i] != $largest)) {
            $second_largest = $arr[$i];
        }
    }

    return $second_largest;
}



$n = [3,54,23,2,13];

$second_largest = SecondLeargestNumber($n);

echo "The second largest number in the array is: $second_largest\n";
