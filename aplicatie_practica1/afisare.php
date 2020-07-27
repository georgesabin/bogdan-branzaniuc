<?php
session_start();
include_once 'helper.php';

if (isset($_SESSION['events'])) {
    afisareBdate($_SESSION['events']);
}
