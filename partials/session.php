<?php
session_start();//start session
//condition for compulsory login
//if session variable id and email is coming empty it will redirect to login page
if(empty($_SESSION['id'] AND $_SESSION['email'])){
    header('location: login.php');
}
?>