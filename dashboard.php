<!DOCTYPE html>
<html lang="en">
<?php 
include ('partials/head.php');
include ('partials/header.php');
include ('config.php');
//values for new users
$id = "";
$username = "-";
$date = "-";
$service = "-";
$status = "-";
$userid =  $_SESSION['id'];//get the user account created ID using session
$sql = "SELECT * FROM customer_service WHERE serviceid ='$userid'"; //its helps to get a customer previous booking
$result = $connect -> query($sql);

?>
<body>
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Date</th>
      <th scope="col">Services</th>
      <th scope="col">Status Report</th>
    </tr>
  </thead>
  <tbody>
    
    
    <?php 
    //fetch the data in a service id 
    while($row = $result ->fetch_assoc()){
      $id = $row['id'];
      $username = $row['firstname'];
      $date = $row['servicedate'];
      $service = $row['avail_service'];
      $status = $row['statusreport'];
    ?>
    <tr>
      <td><?php echo $username; ?></td>
      <td><?php echo $date; ?></td>
      <td><?php echo $service;?></td>
      <td><?php echo $status;?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
  </tbody>
</table>
<?php
include ('partials/footer.php');
?>
</body>
</html>