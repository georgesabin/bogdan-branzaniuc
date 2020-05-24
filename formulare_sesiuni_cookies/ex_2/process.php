<?php
/*  1. Creeaza o pagina de logare (login.php)
    2. Daca logarea s-a realizat cu succes redirecteaza utilizatorul la pagina urmatoare (welcome.php)
    3. Daca logarea a esuat, redirecteaza utilizatorul la pagina de logare, din nou (cel mai bine ar fi ca utilizatorul sa vada cateva mesaje de eroare sugestive)
    4. Daca pagina welcome.php este accesata direct fara nici o logare, accesul pe pagina nu TREBUIE sa existe (din nou, cu mesaje sugestive de eroare) */
session_start();
$_SESSION['isLoggedIn'] = false;
//red1
if (empty($_POST['submit'])) {
    header("location: login.php?eroare=nu-ai-completat-formularul");
}
$uname = testInput($_POST['uname']) ;
$upsw = testInput($_POST['psw']) ;
//red2
if (($uname != $_SESSION['username']) && ($upsw != $_SESSION['password'])) {
    header("Location:login.php?eroare=alzheimer day 0...");
}
//red3
else if (($uname == $_SESSION['username']) && ($upsw != $_SESSION['password'])) {
    header("Location:login.php?eroare=alzheimer day 1...");
}
//red4
else if (($uname != $_SESSION['username']) && ($upsw == $_SESSION['password'])) {
    header("Location:login.php?eroare=alzheimer day 2...");
}
//green!!
else if (($uname == $_SESSION['username']) && ($upsw == $_SESSION['password'])) {
    header("Location:welcome.php");
    $_SESSION['isLoggedIn'] = true;
}

function testinput($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
