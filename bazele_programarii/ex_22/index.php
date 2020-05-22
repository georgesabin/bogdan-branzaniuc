<?php
/* Se da array-ul [2,5,3,10,25,4,100]. Stocheaza valorile pare si impare in alte 2 array-uri, apoi afiseaza-le. */
function programSeparator(array $x): void
{
    $pare = [];
    $impare = [];
    for ($i = 0; $i < count($x); $i++) {

        if (is_float($x[$i] / 2)) {
            $impare[] = $x[$i];

        } elseif (is_int($x[$i] / 2)) {
            $pare[] = $x[$i];

        }
    }
    var_dump($pare);
    echo "</br>";
    var_dump($impare);
    echo "</br>";

}
programSeparator([172, 523, 534, 4, 4, 232, 23, 5654, 3, 433, 23, 25, 33, 23, 21])
?>
