<?php
/*  1. Creeaza o pagina de logare (login.php)
    2. Daca logarea s-a realizat cu succes redirecteaza utilizatorul la pagina urmatoare (welcome.php)
    3. Daca logarea a esuat, redirecteaza utilizatorul la pagina de logare, din nou (cel mai bine ar fi ca utilizatorul sa vada cateva mesaje de eroare sugestive)
    4. Daca pagina welcome.php este accesata direct fara nici o logare, accesul pe pagina nu TREBUIE sa existe (din nou, cu mesaje sugestive de eroare) */
session_start();
if (isset($_SESSION['eroare'])) {
    echo $eroare;
}

if (isset($_POST['submit'])) {
    $username=$_post['uname'];
    $password=$_post['psw'];
}
if (empty($_POST['uname'])) {
    $eroare = 'usernameul/emailul este necesar';
} else {
    $nume = testInput($_POST['uname']);
}
if (empty($_POST['psw']) && (empty($_POST['uname']))) {
    $eroare = 'username si parola lipsesc';
} else if (empty($_POST['uname']) && not_empty($_POST['psw'])) {
    $eroare = 'parola lipseste';
}

if ((isset($_SESSION['password'])) && (isset($_SESSION['username']))) {
    //if(($_SESSION['password']!=$pass){

}
