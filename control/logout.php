<?php

session_start();

$_SESSION['logged_in'] = false;
unset($_SESSION['logged_in']);
unset($_SESSION['user_id']);
unset($_SESSION['username']);
unset($_SESSION['email']);


session_destroy();

header("refresh:1;url=../view/login.php");

?>