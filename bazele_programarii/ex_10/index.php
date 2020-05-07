<?php
#Scrie un program PHP pentru a verifica daca o tripla este prezenta intr-un array de numere intregi sau nu.


function aproapeHouse(array $cartePoker){
   
    for ($q=0; $q< count($cartePoker);$q++) {
         
    if($cartePoker[$q] == $cartePoker[$q+1] && $cartePoker[$q] == $cartePoker[$q+2]){
    
    return true;
    }
    }
    return 0;
    }
         
 echo aproapeHouse([1,3,4,8,3,5,5,5,3,3,7,7,1,10]);
 
?>