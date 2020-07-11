<?php
function aceleDinCarulCuFan(int $x = 12, int $y = 29, int $z = 55): void
{

    if (($x > 20 && $x < 50) || ($y > 20 && $y < 50) || ($z > 20 && $z < 50)) {

        echo 'true';

    } else {

        echo 'false';

    }
}
aceleDinCarulCuFan();
