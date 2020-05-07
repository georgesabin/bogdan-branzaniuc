<?php
/*Scrie un program prin care sa gasesti valoarea cea mai mare dintre doua valori intregi pozitive care se afla in intervalul inchis [20, 30].
 Afiseaza valoarea, in caz contrat afiseaza 0 (nici una din valori nu este in acel interval).*/

function ageStudent(int $ion=21, int $alex=43):void{


if($ion > 20 && $ion < 30){
    $x=$ion;
}else{
    $x=null;
}
if($alex > 20 && $alex < 30){
    $y=$alex;
}else{
    $y=null;
}

if($x > $y){
   echo $x;
}elseif($y > $x){
   echo $y;
}else{
    echo 0;
}

}
ageStudent()

?>