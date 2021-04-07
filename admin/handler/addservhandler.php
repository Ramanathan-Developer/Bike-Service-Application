<?php
include ('../config.php');//db-connection
$servicename = $_POST['servicename'];//get the addservice form servicename value
$sql = "INSERT INTO add_service(services) VALUES('$servicename')";//insert the value to the table
if($connect -> query($sql) == TRUE){
    header('Location: ../admin.php');//redirect to admin page after add a services checkbox
    exit;
}

?>