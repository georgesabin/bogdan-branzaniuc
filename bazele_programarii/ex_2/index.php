<?php

function diferenta_absoluta ($x=30){
    $y= 50;
    $z=$x-$y;
    
    
    if( $x > $y ){
        echo abs($z*3);
    } else {
        echo abs($z);
    }
}
diferenta_absoluta();


?>