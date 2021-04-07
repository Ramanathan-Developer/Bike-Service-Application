<?php
include ('config.php');//db-connection
//get the id 
$id=$_GET['id'];
$sql= "DELETE FROM customer_service WHERE id='$id'";// delete the particular id in a table
if($connect -> query($sql) === TRUE){
    echo "<script>
    alert('Service Deleted');
    window.location.href='admin.php';
    </script>";//redirect
}
?>