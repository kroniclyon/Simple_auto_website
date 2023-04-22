<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\wamp64\vendor\autoload.php';

require 'PHPMailer\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer\src\SMTP.php';

$mail = new PHPMailer(TRUE);

try {
   
   $mail->setFrom('admin@autoscanada.org', 'Darth Vader');
   $mail->addAddress('kingkroniclyon@gmail.com', 'Emperor');
   $mail->Subject = 'Force';
   $mail->Body = 'There is a great disturbance in the Force.';
   
   /* SMTP parameters. */
   $mail->isSMTP();
   $mail->Host = 'smtp.autoscanada.org';
   $mail->SMTPAuth = false;
   $mail->SMTPAutoTLS = false;
   $mail->SMTPSecure = 'tls';
   $mail->Username = 'admin@autoscanada.org';
   $mail->Password = '08075776897Lyon';
   $mail->Port = 465;
   
   /* Disable some SSL checks. */
   $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
   );
   
   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}

?>