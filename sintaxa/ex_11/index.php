<?php
$obiecte_random = array(
    'unu' => '50', 
    'doi' => '40',
    'trei' => '25',
    'patru'=> '30'
    );
    
        
    foreach($obiecte_random as $objects => $actions) {
        echo $objects.' &nbsp &nbsp &nbsp  ======>  &nbsp &nbsp &nbsp   '.$actions. '<br/>' ;
        echo asort($obiecte_random);
       
    }
     echo"<br/>","<br/>","<br/>","<br/>";

    foreach($obiecte_random as $objects => $actions) {
        echo $objects.' &nbsp &nbsp &nbsp  ======>  &nbsp &nbsp &nbsp   '.$actions. '<br/>' ;
        echo ksort($obiecte_random);
       
    }
    echo"<br/>","<br/>","<br/>","<br/>";

    foreach($obiecte_random as $objects => $actions) {
        echo $objects.' &nbsp &nbsp &nbsp  ======>  &nbsp &nbsp &nbsp   '.$actions. '<br/>' ;
        echo arsort($obiecte_random);
       
    }
    echo"<br/>","<br/>","<br/>","<br/>";

     foreach($obiecte_random as $objects => $actions) {
        echo $objects.' &nbsp &nbsp &nbsp  ======>  &nbsp &nbsp &nbsp   '.$actions. '<br/>' ;
        echo krsort($obiecte_random);
   
}

       
       
    
?>