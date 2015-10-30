<?php

$address = 'abcd@zynergy.com';

// $email and $message are the data that is being
// posted to this page from our html contact form
$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$message = $_REQUEST['message'] ;

$body = 

require_once('/class.phpmailer.php');
$mail = new PHPMailer();

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.postmarkapp.com";
$mail->Port = 26;
$mail->Username = "#@#@#@#@-####-@@@@-#####-@#@#@#@#@#@#";
$mail->Password = "#@#@#@#@-####-@@@@-#####-@#@#@#@#@#@#";

$mail->SetFrom('name@yourdomain.com', 'Web App');
$mail->Subject = "Contacto";
$mail->MsgHTML($body);
$mail->AddAddress($address, $name);

if($mail->Send()) {
  echo "Message sent!";
} else {
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

?>