<?php
include ('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include ('partials/head.php');
?>
<body class="mainbody">
    <?php
    include ('partials/header.php');
    ?>
    <div class="hero-image">
            <div class="hero-text">
                <h1>Bike Service Application</h1>
                <p>We're Help you to Book Your Service in Online</p>
            </div>
        </div>
    <div class="container">
        <h2 class="text-center mt-5 mb-5" >Bike Service Booking</h2>
        <div class="row">
            <div class="col-lg-12 mt-3">
            <!--form action go to the handler folder-->
                <form action="handler/custservhandler.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col">
                        <input type="hidden" name="serviceid" value="<?php echo $_SESSION['id']; ?>"><!--this field hidden it helps to get user account id -->
                            <!--form structure-->
                            <h6><label for="inputFirstName">First Name</label></h6>
                            <input type="text" class="form-control inputFirstName" id="inputFirstName" name="firstname"required>
                        </div>
                        <div class="col">
                            <h6><label for="inputLastName">Last Name</label></h6>
                            <input type="text" class="form-control inputLastName" id="inputLastName" name="lastname">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputLicense">Bike Number</label></h6>
                            <input type="text" class="form-control inputLicense" id="inputLicense" name="bikenumber" required>
                        </div>
                        <div class="col">
                            <h6><label for="inputBikeModal">Bike Model</label></h6>
                            <input type="text" class="form-control inputBikeModal" id="inputBikeModal" name="bikemodal"required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputStartDate">Service Date</label></h6>
                            <input type="date" class="form-control inputStartDate" id="inputStartDate" name="servicedate" required >
                        </div>
                        <div class="col">
                            <h6><label for="inputEmailId">Email ID</label></h6>
                            <input type="email" name="email" class="form-control inputEmailId" id="inputEmailId" required/>
                        </div>
                    </div>
                    <!--this field is checkbox if admin add new service its automatically included as checkbox-->
                    <div class="row mt-3">
                        <div class="col">
                            <h6>Available Service</h6>
                            <?php
                            $total = 0;
                            $sql = "SELECT * FROM add_service";
                            $result = $connect -> query($sql);
                            while($row=$result->fetch_assoc()){?>
                            <input type="checkbox" class="ml-5" name="service[]" value="<?php echo $row['services'];?>"> <?php echo $row['services'];?><br>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputPhoneNo">Phone Number</label></h6>
                            <input type="text" class="form-control inputPhoneNo" id="inputPhoneNo" name="phoneno" required>
                        </div>
                        <div class="col">
                            <h6><label for="inputAltPhoneNo">Alternative Phone Number</label></h6>
                            <input type="text" name="altphoneno" class="form-control inputAltPhoneNo" id="inputAltPhoneNo" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputIdname">ID Proof Name</label></h6>
                            <select class="custom-select my-1 mr-sm-2" name="inputidname" id="inputIdname" required>
                                <option selected>Choose...</option>
                                <option value="Aadhaar Card">Aadhaar Card</option>
                                <option value="Voter ID">Voter ID</option>
                                <option value="Driving Licence">Driving Licence</option>
                                <option value="Pan Card">Pan Card</option>
                            </select>
                        </div>
                        <div class="col">
                            <h6><label for="inputIdNumber">ID Proof Number</label></h6>
                            <input type="text" name="idnumber" class="form-control inputIdNumber" id="inputIdNumber" required/>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <h6><label for="inputAddress">Address</label></h6>
                            <textarea class="form-control inputAddress" name="formAddress" id="inputaddress" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                    <!--this field is also hidden because i need to get a status report from initial stage -->
                        <div class="col mt-3">
                        <select  class="status-report custom-select my-1 mr-sm-2" name="statusreport">
                                <option value="Pending" selected>Pending</option>
                        </select>
                        </div>
                        <div class="col mt-3" style="margin-bottom : 10%">
                            <input type="reset" class="btn btn-danger ml-5" value="Reset" style="width: 30%;">
                            <input type="submit" name="submit" class="btn btn-success ml-5" value="Book Services" style="width: 30%;">
                        </div>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php 
    include ('partials/footer.php');
    ?>
</body>

</html>