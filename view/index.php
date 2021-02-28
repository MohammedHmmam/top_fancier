<?php
session_start();
require_once('../inc/initialize.php');

if(isset($_SESSION['logged_in']) && !empty($_SESSION['logged_in']) && $_SESSION['logged_in'] === true){

    // include nav bar in the page
    require_once(LAYOUT_PATH . '/header.php');

}else{
    header("Location:login.php");
}




?>