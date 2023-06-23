<?php
session_start();
session_unset();
session_destroy();
// define("APPURL", "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']));
header('location:http://localhost/poc/login.php');
?>