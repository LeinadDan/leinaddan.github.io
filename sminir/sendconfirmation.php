<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<?php
	include 'conn.php';
	$email 	= mysqli_real_escape_string($con,$_GET['email']);
	$pass 	= mysqli_real_escape_string($con,$_GET['pass']);
	$fname 	= mysqli_real_escape_string($con,$_GET['fname']);
	$lname 	= mysqli_real_escape_string($con,$_GET['lname']);
	$mobile = mysqli_real_escape_string($con,$_GET['mobile']);
	$street = mysqli_real_escape_string($con,$_GET['street']);
	$city 	= mysqli_real_escape_string($con,$_GET['city']);
	$zip 	= mysqli_real_escape_string($con,$_GET['zip']);

	$query = "SELECT guest_user FROM user_accnt_login WHERE guest_user='".$email."'";
	$res1 = mysqli_query($con,$query);
	if(mysqli_num_rows($res1)==0){
		$sql = "INSERT INTO user_accnt_login
				(guest_user,guest_pass) 
				VALUES 
				('$email','$pass')";
		$res = mysqli_query($con,$sql);
		if($res==1){
			$sql1 = "SELECT user_id FROM user_accnt_login WHERE guest_user = '".$email."'";
			$result = mysqli_query($con,$sql1);
			$row = mysqli_fetch_array($result);
			$id = $row['user_id'];
			$sql2 = "INSERT INTO user_accnt_profiles
					(user_id,first_name,last_name,email,mobile_num,street_add,city,zipcode)
					VALUES
					('$id','$fname','$lname','$email','$mobile','$street','$city','$zip')";
					mysqli_query($con,$sql2);
			header("Location: confirmationsent.php?email=".$email);

		}else{
			echo "<script>alert('An error occured.')</script>";
			if (!$res) {
			    printf("Error: %s\n", mysqli_error($con));
			    exit();
			}
		}
	}else{
		header("Location: signup.php?error=1");
	}

	mysqli_close($con);
?>

