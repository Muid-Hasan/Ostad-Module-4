<?php

function check($string) {
    return preg_match('/^[a-zA-Z\s]+$/', $string) === 1;
}

$string1="My name is Enar";
$string2="My name is 123";

if(check($string1)){
    echo "$string1 ,  contains only letters and whitespace ". "\n" ;
}
else{
    echo "$string1 ,  contains NOT only letters and whitespace ". "\n" ;
}

if(check($string2)){
    echo "$string2 ,  contains only letters and whitespace ". "\n" ;
}
else{
    echo "$string2 ,  contains NOT only letters and whitespace ". "\n" ;
}