<?php
/* Calculeaza diferenta dintre doua date calendaristice. Vei afisa numarul de ani, luni si zile.
EX: Difference: 20 years, 9 months and 5 days. */

$dateobj1 = new DateTime('2009-10-11');
$dateobj2 = new DateTime('2006-12-23');
$interval = $dateobj1->diff($dateobj2);
echo $interval->format('diferenta este de %y ani %m luni si %d zile');
