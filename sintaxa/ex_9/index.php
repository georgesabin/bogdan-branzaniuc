<?php
  $obiecte_random = [
   'ciocan' => 'strica tastatura', 
   'mancare' => 'te ajuta sa codezi',
   'glucoza' => 'raceste procesorul',
   'caramida'=> 'strica dintii'
  ];
  
  foreach($obiecte_random as $object => $action) {
 
    echo $object.' &nbsp &nbsp &nbsp  ======>  &nbsp &nbsp &nbsp   '.$action. '<br/>' ;

}

?>