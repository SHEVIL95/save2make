<?php

error_reporting(E_ALL);
require("PHPMailer_5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
function index($Name,$password,$email,$hash){
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
//$mail->SMTPDebug  = 2; 
$mail->From = "shivam.27495.sj@gmail.com";
$mail->FromName = "SHEVIL";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "shivam.27495.sj@gmail.com"; // SMTP username
$mail->Password = "Devil27495"; // SMTP password
$mail->AddAddress("shivam.27495.sj@gmail.com", "Devil27495"); //replace myname and mypassword to yours
$mail->AddReplyTo("shivam.27495.sj@gmail.com", "Devil27495");
$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");

$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'Verify your account';
$mail->Body = 'Hi '.$Name.'!,<br/>
Thanks for signing up!<br/>
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.<br/>
------------------------<br/>
Username: '.$Name.' <br/>
Password: '.$password.'<br/>
------------------------<br/>
Please click this link to activate your account:<br/>
http://localhost:1234/Gyan%20project/verify.php?email='.$email.'&hash='.$hash.'
';
 
 if($mail->Send()) {
	 $success="yes";
	 return $success;
 }
 else{
	 $error="no";
	 return $error;
 }
}

?>