<?php
/* Scrie un program care face upload la server unui fisier, printr-un formular. Formularul va contine un input de tip file si un radio button pentru fiecare din operatiile:

1. Afisare dimensiune fisier
2. Afisare tip fisier
3. Afisare nume fisier fara extensie
4. Afisare extensie fisier
5. Stergere fisier

Daca fisierul exista nu ii mai faci upload, insa poti efectua actiunile de mai sus asupra lui. */

$fileName = $_FILES["fileName"]["name"];
$fileTmpName = $_FILES["fileName"]["tmp_name"];
$fileType = $_FILES["fileName"]["type"];
$fileSize = $_FILES["fileName"]["size"];
$error = $_FILES["fileName"]["error"];
$filePath = "/uploads/$fileName";

$justName = pathinfo($filePath, PATHINFO_FILENAME);
$fileTmpName = $_FILES["fileName"]["tmp_name"];
$fileExt = pathinfo($filePath, PATHINFO_EXTENSION);

function switching(): void#cazurile radio-buttons-urilor

{
    $x = $_POST["proprietati"];
    $size = $GLOBALS["fileSize"];
    $path = $GLOBALS["filePath"];
    $type = $GLOBALS["fileType"];
    $name = $GLOBALS["justName"];
    $ext = $GLOBALS["fileExt"];
    switch ($x) {
        case 1:
            redirect($size);
            break;
        case 2:
            redirect($type);
            break;
        case 3:
            redirect($name);
            break;
        case 4:
            redirect($ext);
            break;
        case 5:
            unlink($path); # nu am inteles restul functiei "[, resource $context ] ) : bool"
            break;

    }}
function redirect($x): void#aceasta functie se foloseste in f switching

{
    header("Location:form.php?eroare=", $x); # vreau sa apara mesajul $x in header, need a solution eroare:Cannot modify header information
}

if (isset($_POST["proprietati"])) {
    if (file_exists($filePath)) {

        switching();

    } elseif (!file_exists($filePath)) {
        move_uploaded_file($fileTmpName, $filePath);
        # aici imi da eroare : Warning: move_uploaded_file(/uploads/comanda eric.jpg):
        #failed to open stream: No such file or directory in C:\wamp64\www\bogdan-branzaniuc\modulul3\ex_4\upload.php on line 57
        # si Unable to move 'C:\wamp64\tmp\php74E0.tmp' to '/uploads/comanda eric.jpg' in C:\wamp64\www\bogdan-branzaniuc\modulul3\ex_4\upload.php on line 57
        # file_upload este activat in ini-file
        switching();
    }

}
