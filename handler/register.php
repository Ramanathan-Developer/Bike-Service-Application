<?php
include ('../config.php');//db-connection
$firstname = $_POST['firstname'];//get the value of firstname
$lastname = $_POST['lastname'];//get the value of lastname
$email = $_POST['email'];//get the value of email
$pwd = $_POST['password'];//get the value of password
$cpwd = $_POST['cpassword'];//get the value of cpassword
//condition is checking the password and cpassword is match or mismatch
if($pwd == $cpwd){
    //if match it will proceed the insert data step and redirect to login page
    $sql = "INSERT INTO user(firstname,lastname,email,password,cpassword)
    VALUES ('$firstname','$lastname','$email','$pwd','$cpwd')";
    $connect -> query($sql);
    echo "<script>
    window.location.href='../login.php';
    </script>";
}else{
    //if mismatch it will show the alert and redirect to registration form
    echo "<script>
    alert('Password Mismatch');
    window.location.href='../register.php';
    </script>";
}
?>