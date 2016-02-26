<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>

<?PHP

  if($_POST) {
    session_start();
    if($_POST['captcha'] != $_SESSION['digit']){
    	header("Location: signup.php?error=3");
    	
    }else{
    	$email = $_POST['email'];
    	$rawpass = $_POST['pass'];
    	$pass = $_POST['pass'];
    	$fname = $_POST['fname'];
    	$lname = $_POST['lname'];
    	$mobile = $_POST['mobile'];
    	$street = $_POST['street'];
    	$city = $_POST['city'];
    	$zip = $_POST['zip'];
        
    	header("Location: sendconfirmation.php?email=".$email.
    			"&pass=".$pass."&fname=".$fname."&lname=".$lname.
    			"&mobile=".$mobile."&street=".$street."&city=".$city.
    			"&zip=".$zip);
    	// echo $_POST['captcha'];
    }
    session_destroy();
  }
  
?>
