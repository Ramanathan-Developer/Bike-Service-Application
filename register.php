<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSA Login</title>
    <link rel="stylesheet" href="css/style.css"/>
     <!--============================Bootstrap CDN===========================================================-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
     
</head>
<body style="background-color:#b3b0a8">
    <div class="container">
        <div class="row"style="margin-top:5%">
            <div class="col-3">
            
            </div>
            <div class="col-6 ">
            <h2 style="margin-left:20%">Registration Form</h2>
            <marquee style="margin-top:3%"><span style="color:red">Welcome!</span> to the Bike Service Application Please Register Your Account.</marquee>
                <form action="handler/register.php" method="POST" class="mt-3" autocomplete="off" name="reg">
                <div class="row">
                    <div class="col">
                            <h6><label for="inputFirstName">First Name<span style="color:red">*</span></label></h6>
                            <input type="text" class="form-control inputFirstName" id="inputFirstName" name="firstname" required>
                            <span id="firstname"></span>
                        </div>
                        <div class="col">
                            <h6><label for="inputLastName">Last Name</label></h6>
                            <input type="text" class="form-control inputLastName" id="inputLastName" name="lastname">
                            <span id="lastname"></span>
                        </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                            <h6><label for="inputemail">Email<span style="color:red">*</span></label></h6>
                            <input type="text" class="form-control inputemail" id="inputemail" name="email" required>
                            <span id="email"></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                            <h6><label for="password">Password<span style="color:red">*</span></label></h6>
                            <input type="password" class="form-control password" id="password" name="password" required>
                            <span id="password"></span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                            <h6><label for="cpassword">Confirm Password<span style="color:red">*</span></label></h6>
                            <input type="password" class="form-control cpassword" id="cpassword" name="cpassword" required>
                            <span id="cpassword"></span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <input type="submit" name="register" value="Register" class="btn btn-success btn-lg" style="width:40%; margin:5% 30%"></a>
                    </div>
                </div>
                </form>
                
            </div>

            <div class="col-3">
            
            </div>
        </div>
    </div>
    <?php 
    include ('partials/footer.php');
    ?>
</body>
</html>