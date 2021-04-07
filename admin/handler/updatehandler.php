<?php
include ('../config.php');//db-connection
$sdate = $_POST['servicedate'];//get the form value
$status = $_POST['statusreport'];//get the form status
$id = $_POST['id'];//get the id 
$sql = "UPDATE customer_service SET servicedate = '$sdate' , statusreport = '$status' WHERE id= '$id' ";
if($connect -> query($sql)){
    echo "<script>
            alert('Service Updated Successfully');
            window.location.href='../admin.php';
        </script>";
}
if(isset($_POST['submit'])){
    require '../phpMailer/PHPMailerAutoload.php';
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
        $mail->Username = 'enter your gmail id';    //enter your gmail id             // SMTP username
        $mail->Password = 'enter your gmail password';                           // gmail/ SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        $mail->setFrom($email,$firstname);
        $mail->addAddress($email,$firstname);     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //$mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = 'Update For Your Booking';//subject of the message 
        $mail->Body    = 'Dear '. $firstname.' '. $lastname.'
        
        '.'                 Your Service is '.$statusreport.' by a Admin.Check Your dashboard.'.'
        '.'Booking Details :'.'
        
        '.'Bike Registration : '.$bikenumber.'
        '.'Bike Modal : ' . $bikemodal. '
        '.'Services You Booked :' . $service.'
        '.'ID Proof : '.$idname.'
        '.'Status : '.$statusreport.'
        
        
        '.'                                         Thank You' ;
        

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;//if mail doesn't send it will occur error
        } else {
            echo 'Message has been sent';
        }

}
?>