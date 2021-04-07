<?php
//connecting to database
$connect = new mysqli("localhost","root","","bike");
if($connect -> connect_error){
    die("Connection Failed :" .$connect->connect_error);//error display
}
?>