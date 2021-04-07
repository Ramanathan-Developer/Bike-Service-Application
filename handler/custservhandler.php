<?php
include ('../config.php');
    $serviceid = $_POST['serviceid'];//get the value from form its a session value
    $firstname = $_POST['firstname'];//get the value of firstname input field
    $lastname = $_POST['lastname'];//get the value of lastname input field
    $bikenumber = $_POST['bikenumber'];//get the value of bike number input field
    $bikemodal = $_POST['bikemodal'];//get the value of bike modal input field
    $servicedate = $_POST['servicedate'];//get the value of servicedate input field
    $email = $_POST['email'];//get the value of email input field
    $availservice = $_POST['service'];//get the array value of services input field
    $service = implode(',',$availservice);//using the implode function array to string
    $phonenumber = $_POST['phoneno'];//get the value of phoneno input field
    $altphonenumber = $_POST['altphoneno'];//get the value of altphoneno input field
    $idname = $_POST['inputidname'];//get the value of id proof name input field
    $idnumber = $_POST['idnumber'];//get the value of id number input field
    $address = $_POST['formAddress'];//get the value of address input field
    $statusreport = $_POST['statusreport'];//get the hidden value of status input field
    //query for insert the data to the particular table
    $sql = "INSERT INTO customer_service(serviceid,firstname,lastname,bikenumber,bikemodal,servicedate,email,avail_service,phoneno,altphoneno,
    idname,idnumber,address,statusreport)VALUES('$serviceid','$firstname','$lastname','$bikenumber','$bikemodal','$servicedate',
    '$email','$service','$phonenumber','$altphonenumber','$idname','$idnumber','$address','$statusreport')";
    if($connect -> query($sql) == TRUE){
        //alert and redirect
       echo "<script>
            alert('Your Service Booked.Check your service status in Dashboard.');
            window.location.href='../index.php';
        </script>";
    }
    //mail function to the admin
    if(isset($_POST['submit'])){
        require '../phpMailer/PHPMailerAutoload.php';
            $serviceid = $_POST['serviceid'];//get the value from form its a session value
            $firstname = $_POST['firstname'];//get the value of firstname input field
            $lastname = $_POST['lastname'];//get the value of lastname input field
            $bikenumber = $_POST['bikenumber'];//get the value of bike number input field
            $bikemodal = $_POST['bikemodal'];//get the value of bike modal input field
            $servicedate = $_POST['servicedate'];//get the value of servicedate input field
            $email = $_POST['email'];//get the value of email input field
            $availservice = $_POST['service'];//get the array value of services input field
            $service = implode(',',$availservice);//using the implode function array to string
            $phonenumber = $_POST['phoneno'];//get the value of phoneno input field
            $altphonenumber = $_POST['altphoneno'];//get the value of altphoneno input field
            $idname = $_POST['inputidname'];//get the value of id proof name input field
            $idnumber = $_POST['idnumber'];//get the value of id number input field
            $address = $_POST['formAddress'];//get the value of address input field
            $statusreport = $_POST['statusreport'];//get the hidden value of status input field
            $mail = new PHPMailer;

            //$mail->SMTPDebug = 4;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'enter your Gmail id';                 // SMTP username
            $mail->Password = 'enter the gmail password';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom($email,$firstname);
            $mail->addAddress('enter your Gmail id');     // Add a recipient
            //$mail->addAddress('ellen@example.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            //$mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Service Request from '.$firstname;
            $mail->Body    = 'Dear Admin
            
            '.'       '. $firstname . ' is Booked a Services through online Bike Service Application Website.
              Detail : '.'
            '.
            ' Bike Registration No : '.$bikenumber. '
            '.
            ' Bike Modal : ' .$bikemodal. '
            '.
            ' Service Date : ' .$servicedate . '
            '. 
            ' Email : '.$email. '
            '. 
            ' Services List : ' .$service. '
            '. 
            ' Phone Number : ' .$phonenumber.'
            '.
            ' Alternative Phone Number : ' .$altphonenumber.'
            '.
            ' ID Proof Type : ' .$idname.'
            '.
            ' ID Proof Number : ' .$idnumber.'
            '.
            ' Address : ' .$address.'
            '.
            ' Status Report : ' .$statusreport.'
            '.'
            '.'
            '.
            'Verify customer Details, check the available date for the customer entered date and Update the Status Report as Booked.
            '. 
            '                                                   Thank You';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }

    }
?>
