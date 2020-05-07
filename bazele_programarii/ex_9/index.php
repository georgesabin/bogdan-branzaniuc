<?php

        $corp=[0,1,2, 3,4,5,6];
        $viscere=[1,2,3,];

    function programApartenenta(/*tot aceeasi eroare ''too few arguments" si daca fac $corpArray aici dupa ce l-am definit in afara f.*/): void{
        global$corp;
        global$viscere;
        $keys = array_keys($corp, $viscere[array_keys($viscere)[0]]); # aici practic ii spun sa inceapa numaratoarea in arrayul $corp de la cheia 0 a arrayului $viscere inclus in acesta
        
    foreach($keys as $k){
        if(array_slice($corp, $k, count($viscere)) == $viscere){
            echo 'true';
        }else{
            echo 'false';
        }
      }

        
}
programApartenenta();


/*
"array_keys — Return all the keys or a subset of the keys of an array"

$a = ["w","c","d","e","g","h"];
$b = ["c","d","e"];
$c = ["c","e","d"];
function containsSequence($arr, $subArray){
    $keys = array_keys($arr, $subArray[array_keys($subArray)[0]]); 
    foreach($keys as $k) {
        if(array_slice($arr, $k, count($subArray)) == $subArray){
            return true;    
        }
    }
    return false;
}
echo 'Contains sequence: '.(containsSequence($a,$b)?'yes:':'no');
echo 'Contains sequence: '.(containsSequence($a,$c)?'ues':'no');
*/

?>