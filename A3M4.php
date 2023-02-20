<?php

function ShiftPop($array){

    array_shift($array);
    array_pop($array);

    return $array;

}

$name= array('Syed ','Muid','Hasan','Enar');

$newArray=ShiftPop($name);

$n=count($newArray);

for($i=0; $i<$n; $i++){
    echo $newArray[$i]. "\n";
}