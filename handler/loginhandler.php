<?php
session_start();//session start 
include ('../config.php');//db-connection
$email = $_POST['email'];//get the login form input value of email
$pwd = $_POST['password'];//get the login form input value of password
$sql = "SELECT * FROM user WHERE email='$email' AND password='$pwd' limit  1";//check the login information correct or incorrect
$result = $connect -> query($sql);//send the query to database
while($row= $result -> fetch_assoc()){
    $emailid = $row['email'];//get the value from a database email
    $password = $row['password'];//get the value from a database password
    $userid = $row['id'];//get the value from a database id

$_SESSION['id'] = $userid;//set the session variable
$_SESSION['email'] = $emailid;}//set the session variable
//condition and redirect
if($_SESSION['email'] == $email){
    echo "<script>
            window.location.href='../index.php';
        </script>";
}else{
    echo "<script>
            window.location.href='../login.php';
        </script>";
}
?>