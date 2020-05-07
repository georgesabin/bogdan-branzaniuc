<?php
  
function laculLondrei(int $gasca=55, int $rata=125): int {
   
    if ($gasca<=100 ){
        $a=100-$gasca;
    }else{
        $a=$gasca-100;
    }
    if ($rata<=100){
        $b=100-$rata;
    }else{
        $b=$rata-100;
    }
    if($a<$b){
        echo $gasca;
    }elseif($b<$a){
        echo $rata;
    }else{
        echo 0;
    }

}
laculLondrei();


?>