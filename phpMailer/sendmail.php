<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require('src/PHPMailer.php');
require('src/SMTP.php');



//Create an instance; passing `true` enables exceptions

function sendMail($recipients,$subject,$htmlMsg,$htmlMsgAlt,$fromName){
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);
    // $mail->SMTPDebug = 3;
    //configuration
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'khanali@msamt.com';                    //SMTP username
    $mail->Password   = 'khanandkhan061@';                      //SMTP password
    $mail->SMTPSecure = "TLS";                                  //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
      //sender
    $mail->setFrom('khanali@msamt.com', $fromName);    
    //Add a recipient
    $mail->addAddress($recipients);    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $htmlMsg;
    $mail->AltBody = $htmlMsgAlt;

    if (!$mail->send()) {     
      return false;
    } else {
        return true;
    }

}



$recipients = "khanandkhan061@gmail.com";
$subject = "Somiacis Email Verification";
$htmlMsg = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: \'Arial\', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            color: #555;
            margin-bottom: 15px;
        }
        .otp-container {
            padding: 15px;
            background-color: #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .footer {
            color: #888;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Somiacis Email Verification</h2>
        <p>Hello,</p>
        <p>Thank you for reaching out to us. To ensure the security of your account and assist you better, please verify your email address by using the following One-Time Password (OTP):</p>
        <div class="otp-container">
            '.rand(100000,999999).'
        </div>
        <p>The OTP is valid for 30 minutes. Please use it in our contact form to verify your email address.</p>
        <p>If you did not request this verification or need assistance, please contact our support team.</p>
        <p class="footer">Thank you,<br> The Somiacis Team</p>
    </div>
</body>
</html>';
$htmlMsgAlt = 'Hello,
        Thank you for reaching out to us. To ensure the security of your account and assist you better, please verify your email address by using the following One-Time Password (OTP):
            '.rand(100000,999999).'. The OTP is valid for 30 minutes. Please use it in our contact form to verify your email address. If you did not request this verification or need assistance, please contact our support team.Thank you, The Somiacis Team';
$fromName = "Somiacis";

if(sendMail($recipients,$subject,$htmlMsg,$htmlMsgAlt,$fromName)){
    echo "Email sent successfully";
}else{
    echo "Something went wrong while sending email";
}






  
       
   



    

