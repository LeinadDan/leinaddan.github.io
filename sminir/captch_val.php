<?PHP
  if($_POST) {
    session_start();
    if($_POST['captcha'] != $_SESSION['digit']){
    	header("Location: contactus.php?error=2#qcontact");
    }else{
    	header("Location: sendmail.php");
    }
    session_destroy();
  }
?>