<?php

$margarina = array('plastic','parafina','ulei','vegetal','apa','celuloza');

 for($index = 0; $index <= sizeof ($margarina) - 1; $index++){
  echo $margarina [$index];
  echo "<br />";
}

echo"<br/>","<br/>","<br/>","<br/>";

/* am gasit functiile sort() si rsort() pentru a sorta crescator si descrescator , insa arata asa (le dezordoneaza): */

$margarina = array('plastic','parafina','ulei','vegetal','apa','celuloza');

 for($index = 0; $index <= sizeof ($margarina) - 1; $index++){
  sort($margarina);
  echo $margarina [$index];
    
  echo "<br />";
}
echo"<br/>","<br/>","<br/>","<br/>";

/*sunt sigur ca exista explicatie logica si sunt curios. poate datorita loop-ului , insa si cu print se intampla la fel. ele din fabrica sunt in ordine crescatoare totusi 
key-urile zic. :))*/

/*in cazul in care exercitiul se refera la calorile array-ului ca fiind numere, de ex, notele unui examen mai jos e abordarea aceasta:*/
 
 $note_examen= array(10,5,7,9,3);
 sort($note_examen);
 print_r($note_examen);
 
 echo"<br/>","<br/>","<br/>","<br/>";
 
 rsort($note_examen);
 print_r($note_examen);


 /* deci exercitiul la asta s-a referit, it works perfectly and make sens!, las si ce e mai sus pentru corectii / sfaturi caligrafice ale codului  */


?>