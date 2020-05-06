<?php
function acele_din_carul_cu_fan(int $x=12, int $y=23, int $z=55) {
 $multime_valori =array ($x , $y, $z);
 $a=range(20,50);
    /* sunt   sunt   sunt   sigur ca imi 
   vei    vei    vei    spune o forma mai scurta 
   pentru pentru pentru asta, nu e bine sa ne 
   repe   -repe  -repe  -tam :) */
 if(in_array($x,$a)||
    in_array($y,$a)||
    in_array($z,$a)){

    echo 'true';

 }else{

    echo 'false';

  }
}
acele_din_carul_cu_fan();
?>