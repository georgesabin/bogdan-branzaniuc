<?php

function bi_verificare($x=30,$y=1){
    
    

    if($x==30 && $y==30){
        echo  'x si y sunt egali cu 30';
    }

    elseif ($x + $y==30) {
        echo 'suma termenilor x si y este 30';
    }
    else{
        echo 'no result';
    }
    
}
  bi_verificare();

?>