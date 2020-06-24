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

#2. Daca data vechime angajat >= 1 an, calculeaza si adauga bonusul la salariu.
$dif = 0;
$years = 0;
$date1 = date('Y-m-d');
for ($i = 0; $i < count($angajati); $i++) {
 $z = explode(',', $angajati[$i]);
 $dif = abs(strtotime($z[5]) - strtotime($date1));
 $years = floor($dif / (365 * 60 * 60 * 24));
 if ($years >= 1) {
  echo floor($z[4]);
  $z[3] += $z[4] % $z[3];
 } else {
  0;
 }
}

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
