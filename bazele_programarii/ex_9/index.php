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

function marubozu(){
    $a = [0,1,2,3,4,5,5,5,6,7,8];
    
    for($i=0; $i <count($a); $i++){
       
        if ($a[$i] === 1 && $a[$i+1] === 2 && $a[$i+2] === 3) {
        echo  true;
        }
        }
        return false;
    }

    marubozu()
    ?>