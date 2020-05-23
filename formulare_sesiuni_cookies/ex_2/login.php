<?php
/*  1. Creeaza o pagina de logare (login.php)
    2. Daca logarea s-a realizat cu succes redirecteaza utilizatorul la pagina urmatoare (welcome.php)
    3. Daca logarea a esuat, redirecteaza utilizatorul la pagina de logare, din nou (cel mai bine ar fi ca utilizatorul sa vada cateva mesaje de eroare sugestive)
    4. Daca pagina welcome.php este accesata direct fara nici o logare, accesul pe pagina nu TREBUIE sa existe (din nou, cu mesaje sugestive de eroare) */

session_start();
$username = 'NUMELE_TAU';
$password = 'programareweb';
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

?>

<html>
</body>
<form action="process.php" method="post" >

  <div>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    </br>
    </br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    </br>
    </br>

    <button type="submit">Login</button>
    <label>
    <?php if (isset($_GET['eroare'])) {
echo sprintf('<span class="eroare">%s</span>', $_GET['eroare']);
} ?>


</form>
</body>
</html>
