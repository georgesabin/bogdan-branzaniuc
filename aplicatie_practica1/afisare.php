<?php
session_start();
include_once 'helper.php';

if (isset($_SESSION['events'])) {
    $eveniment = $_SESSION['events'];
    afisareBdate($eveniment);
}
