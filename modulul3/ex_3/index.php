<?php
$fisier = file_get_contents('companie.dat.txt');
list($angajati) = explode("\n", $fisier);
list($nume, $prenume, $functie, $salariu, $bonus, $dataAngajare) = explode(",", $angajati);
echo 'nume:' . $nume, "<br>";
echo 'prenume:' . $prenume, "<br>";
echo 'functie:' . $functie, "<br>";
echo 'salariu:' . $salariu, "<br>";
echo 'bonus:' . $bonus, "<br>";
echo 'data angajare:' . $dataAngajare, "<br>";
$angajati = explode("\n", $fisier);
function medieSalarJob(string $x): int
{
 $angj = $GLOBALS['angajati'];
 $salarii = [];

 for ($i = 0; $i < count($angj); $i++) {
  $z = explode(",", $angj[$i]);
  if ($z[2] === $x) {
   $salarii[] = $z[3];
  } else {
   0;
  }
 }
 if (empty($salarii)) {
  0;
 } else {
  $r = array_sum($salarii);
  $m = $r / count($salarii);
 }
 ;
 if (empty($salarii)) {
  0;
 } else {
  return $m;
 }
 echo "</br>";
}
$joburi = [];
for ($i = 0; $i < count($angajati); $i++) {
 $s = explode(',', $angajati[$i]);
 $joburi[] = $s[2];
}
$joburi = array_unique($joburi);
$joburi = array_values($joburi);
$mediiSalarii = [];

for ($i = 0; $i < count($joburi); $i++) {
 $mediiSalarii[] = medieSalarJob($joburi[$i]);
}
$job = array_combine($joburi, $mediiSalarii);
var_dump($job);
