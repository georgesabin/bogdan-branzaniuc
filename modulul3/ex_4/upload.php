<?php
/* Scrie un program care face upload la server unui fisier, printr-un formular. Formularul va contine un input de tip file si un radio button pentru fiecare din operatiile:

1. Afisare dimensiune fisier
2. Afisare tip fisier
3. Afisare nume fisier fara extensie
4. Afisare extensie fisier
5. Stergere fisier

Daca fisierul exista nu ii mai faci upload, insa poti efectua actiunile de mai sus asupra lui. */
# stabilim daca ne trebuie doua pagini DA
# facem submit buttonul
# facem radio buttons-urile
# daca incarcam un fisier

$fileName = $_FILES["fileName"]["name"];
$fileType = $_FILES["fileName"]["type"];
$fileSize = $_FILES["fileName"]["size"];
$error = $_FILES["fileName"]["error"];

$justName = basename($filePath, $filename);
$fileTmpName = $_FILES["fileName"]["tmp_name"];
$fileExt = 0;
$filePath = "/uploads/$fileName";

if (isset($_POST[["proprietati"]])) {
    if (file_exists($fileName, $filePath)) {
        function switching()
        {
            $x = $_Post["fileName"];
            switch ($x) {
                case 1:
                    #do this
                    break;
                case 2:
                    #do this
                    break;
                case 3:
                    #do this
                    break;
                case 4:
                    #do this
                    break;
                case 5;
                    #do this
                    break;

            }}
    } elseif (!file_exists($fileName, $filePath)) {
        move_uploaded_file($fileName, $filePath);
        switching();
//fa-i doar cod
    }

}
