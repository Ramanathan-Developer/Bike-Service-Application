<?php
include ('../config.php');//db-connection
?>
<!DOCTYPE html>
<html lang="en">
<?php
include ('partials/head.php');//head-section
?>
<body>
    <?php
    include ('partials/header.php');//header-section
    ?>
    <section>
        <table class="table table-bordered table-hover"> 
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-center">ID</th>
                <th scope="col" class="text-center">Bike Number</th>
                <th scope="col" class="text-center">Bike Modal</th>
                <th scope="col" class="text-center">Service Date</th>
                <th scope="col" class="text-center">Services</th>
                <th scope="col" class="text-center">ID Proof Name</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center" >Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <?php
                  //fetch the data from customer service request
                    $sql = "SELECT * FROM customer_service";
                    $result = $connect -> query($sql);
                    while($row=$result->fetch_assoc()){
                      echo "<tr>";
                      echo "<td class='text-center'>". $row["id"]. "</td>".//fetch the id
                      "<td class='text-center'><b>". $row["bikenumber"]. "</b></td>".//fetch the bike number
                      "<td class='text-center'>". $row["bikemodal"]. "</td>".//fetch the bike modal
                      "<td class='text-center'>". $row["servicedate"]. "</td>".//fetch the date
                      "<td class='text-center'><b>". $row["avail_service"]. "</b></td>".//fetch services
                      "<td class='text-center'>". $row["idname"]. "</td>". //fetch id proof name
                      "<td class='statusreport text-center '>". $row["statusreport"]. "</td>". //fetch the status
                      "<td class='text-center'>"."<a href='view.php?id=".$row['id']."' class='btn btn-primary btn-sm'> View</a>" .//redirect to view page passing with particular row id
                      "<a href='update.php?id=".$row['id']."' class='ml-2 btn btn-warning btn-sm'> Update</a>" .//redirect to update page passing with particular row id
                      "<a href='delete.php?id=".$row['id']."' class='ml-2 btn btn-danger btn-sm'> Delete</a>" .//redirect to delete page passing with particular row id
                      
                      "</td>";
                      }
                      echo "</tr>";
                  ?>
              </tr>
              
            </tbody>
          </table>
    </section>
      <?php
      include ('partials/footer.php');
      ?>
</body>
</html>