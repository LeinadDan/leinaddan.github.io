<?PHP
  if($_POST) {
    session_start();
    if($_POST['captcha'] != $_SESSION['digit']){
    	header("Location: contactus.php?error=2#qcontact");
    }else{
    	$email = urlencode($_POST['txtemail']);
    	$name = urlencode($_POST['txtname']);
    	$message = urlencode(htmlspecialchars($_POST['txtmessage']));
    	header("Location: sendmail.php?txtemail=". $email."&txtname=".$name."&txtmessage=".$message);
    }
    session_destroy();
  }
?>