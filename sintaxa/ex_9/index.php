<?php
 $obiecte_random = array(
'ciocan' => 'strica tastatura', 
'mancare' => 'te ajuta sa codezi',
'glucoza' => 'raceste procesorul',
'caramida'=> 'strica dintii'
);
foreach($obiecte_random as $objects => $actions) {
    echo $objects.' &nbsp &nbsp &nbsp  ======>  &nbsp &nbsp &nbsp   '.$actions. '<br/>' ;
}
/* nu am crezut ca functioneaza &nbsp si in php, a fost o surpriza placuta */
?>