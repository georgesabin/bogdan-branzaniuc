<?php
function sirulFibonacci($num): array{
    
    $num1 = 0;
    $num2 = 1;
    $output = 0;
    $f =[$num1,$num2];

    for($x = 0; $x <= $num; $x++){
        $output= $num1+$num2;
        $num1=$num2;
        $num2=$output;
        $f[]=$output;
    }
    return($f);
    
}
var_dump (sirulFibonacci(15));
// l-am facut cu array ca sa exersez return si return type =) 
