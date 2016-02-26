<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>
<?php
	session_start();
	include 'conn.php';

	$user = mysqli_real_escape_string($con,$_POST['txtemail']);
	$raw_pass = mysqli_real_escape_string($con,$_POST['txtpass']);
	$pass = md5($raw_pass);


	$sql = "SELECT * FROM user_accnt_login WHERE guest_user = '$user' AND guest_pass='$pass'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);

	if(mysqli_num_rows($result)>0){
		$sql = "SELECT first_name FROM user_accnt_profiles WHERE user_id = ". $row['user_id'];

		$res = mysqli_query($con,$sql);
		$row1 = mysqli_fetch_array($res);

		echo 'click <a href="index.php">here</a> if it doesnt redirect';
		$_SESSION['user_id'] = $row['user_id'];
		$_SESSION['user'] = $row['guest_user'];
		$_SESSION['user_name'] = $row1['first_name'];
		header('Location: index.php');
	}
	else{
		echo 'click <a href="login.php?error=1">here</a> if it doesnt redirect';
		header('Location: login.php?error=1');
	}
	mysqli_close($con);


?>

