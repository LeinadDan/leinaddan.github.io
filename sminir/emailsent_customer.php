<?php

// $email and $message are the data that is being
// posted to this page from our html contact form
$email = urldecode($_GET['txtemail']) ;
$name = urldecode($_GET['txtname']);
$message = urldecode(htmlspecialchars_decode($_GET['txtmessage'])) ;
// When we unzipped PHPMailer, it unzipped to
// public_html/PHPMailer_5.2.0
require(dirname(__FILE__) .'/PHPMailer_5.2.0/class.phpmailer.php');

$mail = new PHPMailer(true);
try{
// set mailer to use SMTP
$mail->IsSMTP();

$mail->SMTPDebug = 2; // enables debugging

// As this email.php script lives on the same server as our email server
// we are setting the HOST to localhost
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPSecure = "tls";       // sets the prefix to the servier
$mail->SMTPAuth = true;    		 // turn on SMTP authentication
$mail->Port       = 587;		// set the SMTP port for the GMAIL server

// When sending email using PHPMailer, you need to send from a valid email address
// In this case, we setup a test email account with the following credentials:
// email: send_from_PHPMailer@bradm.inmotiontesting.com
// pass: password
$mail->Username = "testmail.sminir@gmail.com";  // SMTP username
$mail->Password = "sminirpass"; // SMTP password

// $email is the user's email address the specified
// on our contact us page. We set this variable at
// the top of this page with:
// $email = $_REQUEST['email'] ;
$mail->From = $email;
$mail->FromName = "Quick Contact";

// below we want to set the email address we will be sending our email to.
$mail->AddAddress($email,$name);

// set word wrap to 50 characters
$mail->WordWrap = 50;
// set email format to HTML
$mail->IsHTML(true);

$mail->Subject = "Quick Contact Sent";

// $message is the user's message they typed in
// on our contact us page. We set this variable at
// the top of this page with:
// $message = $_REQUEST['message'] ;
$mail->Body   = "Hi there!<br />Thank you very much for contacting us. We will try to respond to you as soon as possible.<br /><br />Here is the message you sent us: <br /><hr>".nl2br($message)."<hr>";
$mail->AltBody = "Hi there!/nThank you very much for contacting us. We will try to respond to you as soon as possible./n/nHere is the message you sent us: /n------------------".$message."------------------";

if(!$mail->Send())
{
   exit;
}
header("Location: contactus.php?message=1#qcontact");

}catch (phpmailerException $e) {
  $error = $e->errorMessage(); //Pretty error messages from PHPMailer
  if(strpos($error, "Invalid address") !== false){
  	header("Location:contactus.php?error=1#qcontact");
  	echo $error;
  }

} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
?>