<?php
/*  1. Creeaza o pagina de logare (login.php)
    2. Daca logarea s-a realizat cu succes redirecteaza utilizatorul la pagina urmatoare (welcome.php)
    3. Daca logarea a esuat, redirecteaza utilizatorul la pagina de logare, din nou (cel mai bine ar fi ca utilizatorul sa vada cateva mesaje de eroare sugestive)
    4. Daca pagina welcome.php este accesata direct fara nici o logare, accesul pe pagina nu TREBUIE sa existe (din nou, cu mesaje sugestive de eroare) */

// daca empty username or password ,  send him back cu eroare
session_start();

//cum as putea sa protejez pagina asta in caz ca cineva intra pe la spatele formularului direct la aceasta pagina? 

echo " alzheimer vindecat !! ";
