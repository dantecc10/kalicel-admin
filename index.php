<?php
session_start();
if (empty($_SESSION['ID'])) {
    header("Location: login.php");
}

include "php scripts/Conexión.php";
?>