<?php
session_start();
if (!isset($_SESSION['Active']) || $_SESSION['Active'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<?php

/* Define username and password */
$Username = "Steve";
$Password = "pass";
