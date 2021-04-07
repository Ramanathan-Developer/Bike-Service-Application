<!DOCTYPE html>
<html lang="en">
<?php
include ('partials/head.php');//head-section
include ('partials/header.php');//header-section
//get id
$id = $_GET['id'];
$sql = "SELECT * FROM customer_service WHERE id='$id'";//select the table data using id
$result = $connect -> query($sql);
while($row=$result->fetch_assoc()){
    $userid = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $bikemodal = $row['bikemodal'];
    $bikenumber = $row['bikenumber'];
    $servicedate = $row['servicedate'];
    $email = $row['email'];
    $service = $row['avail_service'];
    $service1 = explode(',', $service);
    $phone = $row['phoneno'];
    $altphone = $row['altphoneno'];
    $idname = $row['idname'];
    $idnumber = $row['idnumber'];
    $address = $row['address'];
    $status = $row['statusreport'];

}
?>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-12">
            <form action="handler/custservhandler.php" method="POST" autocomplete="off">
                    <div class="row mt-5">
                        <div class="col">
                            <h6><label for="inputFirstName">First Name</label></h6>
                            <input disabled type="text" class="form-control inputFirstName" id="inputFirstName" name="firstname" value="<?php echo $firstname;?>">
                        </div>
                        <div class="col">
                            <h6><label for="inputLastName">Last Name</label></h6>
                            <input disabled type="text" class="form-control inputLastName" id="inputLastName" name="lastname" value="<?php echo $lastname;?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputLicense">Bike Number</label></h6>
                            <input disabled type="text" class="form-control inputLicense" id="inputLicense" name="bikenumber" value="<?php echo $bikenumber;?>">
                        </div>
                        <div class="col">
                            <h6><label for="inputBikeModal">Bike Model</label></h6>
                            <input disabled type="text" class="form-control inputBikeModal" id="inputBikeModal" name="bikemodal" value="<?php echo $bikemodal;?>" >
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputStartDate">Service Date</label></h6>
                            <input disabled type="date" class="form-control inputStartDate" id="inputStartDate" name="servicedate" value="<?php echo $servicedate;?>">
                        </div>
                        <div class="col">
                            <h6><label for="inputEmailId">Email ID</label></h6>
                            <input disabled type="email" name="email" class="form-control inputEmailId" id="inputEmailId" value="<?php echo $email ?>" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6>Available Service</h6>
                            <?php
                            $total = 0;
                            $sql = "SELECT * FROM add_service";
                            $result = $connect -> query($sql);
                            while($row=$result->fetch_assoc()){?>
                            <input disabled type="checkbox" class="ml-5" name="service[]" value="<?php echo $row['services'];?>
                            "<?php
                             if(in_array($row['services'],$service1)){
                                echo 'checked';
                            }
                            
                            ?>> <?php echo $row['services'];?><br>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputPhoneNo">Phone Number</label></h6>
                            <input disabled type="text" class="form-control inputPhoneNo" id="inputPhoneNo" name="phoneno" value="<?php echo $phone;?>" >
                        </div>
                        <div class="col">
                            <h6><label for="inputAltPhoneNo">Alternative Phone Number</label></h6>
                            <input disabled type="text" name="altphoneno" class="form-control inputAltPhoneNo" id="inputAltPhoneNo" value="<?php echo $altphone; ?>" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputIdname">ID Proof Name</label></h6>
                            <select disabled class="custom-select my-1 mr-sm-2" name="inputidname" id="inputIdname" value="<?php echo $idname;?>">
                            <option>Choose...</option>
                                <option value="Aadhaar Card"<?php if( $idname == "Aadhaar Card"){?>selected = "selected"<?php } ?>>Aadhaar Card</option>
                                <option value="Voter ID"<?php if( $idname == "Voter ID"){?>selected = "selected"<?php } ?>>Voter ID</option>
                                <option value="Driving Licence"<?php if( $idname == "Driving Licence"){?>selected = "selected"<?php } ?>>Driving Licence</option>
                                <option value="Pan Card"<?php if( $idname == "Pan Card"){?>selected = "selected"<?php } ?>>Pan Card</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6><label for="inputIdNumber">ID Proof Number</label></h6>
                            <input disabled type="text" name="idnumber" class="form-control inputIdNumber" id="inputIdNumber" value="<?php echo $idnumber;?>" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputAddress">Address</label></h6>
                            <textarea style="margin-bottom : 10%"  disabled class="form-control inputAddress" name="formAddress" id="inputaddress" rows="3" value=""><?php echo $address;?></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    include ('partials/footer.php');//footer-section
    
    ?>
</body>
</html>