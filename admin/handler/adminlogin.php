<?php
session_start();//session start comment
include ('../config.php');
$email = $_POST['email'];//get login form value of email
$pwd = $_POST['password'];//get login form value of password
$sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pwd' limit 1";//condition email and password is match and true proccess code
$result = $connect -> query($sql);
while($row= $result -> fetch_assoc()){
    $_SESSION['id'] = $row['id'];//set the session variable id
    $_SESSION['password'] = $row['password'];//set the session variable password
}
if($_SESSION['password'] == $pwd){
    echo "<script>
            window.location.href='../admin.php';
        </script>";//redirect to admin page if your email and password match
}else{
    echo "<script>
            window.location.href='../adminlogin.php';
        </script>";//redirect to adminlogin page if your email and password did not match
}
?>