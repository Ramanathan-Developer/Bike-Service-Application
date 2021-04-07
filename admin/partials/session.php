<?php
//compulsory login condition
session_start();
//if the session variable id and password is null it will redirect to adminlogin page
if(empty($_SESSION['id'] AND $_SESSION['password'])){
    header('location: adminlogin.php');
}
?>