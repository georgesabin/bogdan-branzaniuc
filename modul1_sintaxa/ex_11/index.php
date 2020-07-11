<?php
 $obiecte_random = [
    'unu' => 'Petru', 
    'doi' => 'Ion',
    'trei' => 'Eleuteriu',
    'patru'=> 'Vicentiu'
];

asort($obiecte_random);
var_dump($obiecte_random);
 
  echo"<br/>","<br/>","<br/>","<br/>";

ksort($obiecte_random);
var_dump($obiecte_random);
 
  echo"<br/>","<br/>","<br/>","<br/>";

arsort($obiecte_random);
var_dump($obiecte_random);
 
  echo"<br/>","<br/>","<br/>","<br/>";

krsort($obiecte_random);
var_dump($obiecte_random);

       
?>