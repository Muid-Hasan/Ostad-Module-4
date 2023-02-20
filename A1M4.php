<?php
function len($x){

    usort($x,function($a,$b){
        if(strlen($a)==strlen($b)){
            return 0;
        }
        return (strlen($a) < strlen($b)) ? -1 : 1; });

        return $x;

    }

$name= array("aa","bbbbbbb","cccc");
$SortedString=len($name);
print_r($SortedString);