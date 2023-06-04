<?php

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];

 
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
    exit;
  }

  
  $file = fopen("subscribers.txt", "a");
  fwrite($file, $email . "\n");
  fclose($file);

  
  header("Location: thank_you.html");
  exit;
}

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.brevo.com';  
$mail->SMTPAuth = true;
$mail->Username = 'test@hot.com';  
$mail->Password = 'aHotTest';  
$mail->SMTPSecure = 'tls';
$mail->Port = 25;

function getUserEmail() {
  $userEmail = $_POST['email'];  
  return $userEmail;
}

$mail->setFrom('test@hot.com', 'Alket');
$mail->addAddress(getUserEmail());

$mail->Subject = 'Subscription Confirmation';
$mail->Body = 'Thank you for subscribing. Exciting offers are on the way!!!';

if ($mail->send()) {
  echo 'Email sent successfully.';
} else {
  echo 'Error sending email: ' . $mail->ErrorInfo;
}


//reference https://shorturl.at/juAJU 

 

?>
