<?php
$x=16;
$y=16;

function program(){
  
   global $x;
   global $y;

    if($x==$y){
    $z=3;
    echo ($x+$y)*$z;
    
    } else {
    echo $x+$y;
    }
    
}
program()
?>