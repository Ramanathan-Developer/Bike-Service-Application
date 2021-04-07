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
        <div class="row">
            <div class="col-3">
            
            </div>
            <div class="col-6">
            <!--form action go to the handler folder-->
                <form action="handler/loginhandler.php" method="POST" style="margin-top:10%" autocomplete="off">
                <h2 style="margin-left:30%">Login Form</h2>
                <div class="row mt-3">
                    <div class="col">
                            <h6><label for="inputemail">Email<span style="color:red">*</span></label></h6>
                            <input type="text" class="form-control inputemail" id="inputemail" name="email" required>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                            <h6><label for="password">Password<span style="color:red">*</span></label></h6>
                            <input type="password" class="form-control password" id="inputemail" name="password" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                    <input type="submit" name="login" value="Login" class="btn btn-primary btn-lg" style="width:30%; margin: 5% 0% 0% 39% ">
                    <a href="register.php"><input type="button" name="register" value="Register" class="btn btn-success btn-lg" style="width:30%; margin-top:5%" ></a>
                    </div>
                </div>
                <marquee style="margin-top:10%"><span style="color:red">Note : </span>Login is Compulsory for the Bike Service Application</marquee>
                <marquee><span style="color:red">Note : </span>If you Don't have the Account!! Please Click the Register Button Above</marquee>
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