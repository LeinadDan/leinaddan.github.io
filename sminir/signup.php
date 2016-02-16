<?php 
$title = "San Miguel Imus Nature Island Resort - Signup";
$style = "_styles/navbar.css";
include 'head.php';
include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<h3>Sign Up</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<div  id="result">
				<?php 
					if(isset($_GET['error'])){
						echo '<div class="alert alert-warning">Wrong Username/Password.</div>';
					} 
				?>
			</div>
			<form id="signup" method="post" action="#">
				<hr>
				<h3>Login Details</h3>
				<div class="form-group">
					<label for="txtuser">Username: </label>
					<input type="text" name="txtuser" id="txtuser" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtpass">Password: </label>
					<input type="password" name="txtpass" id="txtpass" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtrepass">Confirm Password: </label>
					<input type="password" name="txtrepass" id="txtrepass" class="form-control" required >
				</div>
				<hr>
				<h3>Personal Information</h3>
				<div class="form-group">
					<label for="txtfname">First Name: </label>
					<input type="text" name="txtfname" id="txtfname" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtlname">Last Name: </label>
					<input type="text" name="txtlname" id="txtlname" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtmi">Middle Initial: </label>
					<input type="text" name="txtmi" id="txtmi" class="form-control">
				</div>
				<div class="form-group">
					<label for="txtemail">Email Address: </label>
					<input type="email" name="txtemail" id="txtemail" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtmobile">Mobile Number: </label>
					<input type="text" name="txtmobile" id="txtmobile" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtstreet">Street Address: </label>
					<input type="text" name="txtstreet" id="txtsreet" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtcity">City: </label>
					<input type="text" name="txtcity" id="txtcity" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtzipcode">Zipcode:</label>
					<input type="text" name="txtzipcode" id="txtzipcode" class="form-control">
				</div>
				<div>
					<label>Captcha: </label>
					<p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
					<small>copy the digits from the image into this box</small></p>
					<p><input type="text" class="form-control" size="6" maxlength="5" name="captcha" value=""><br>
					
				</div>
				<div class="form-group">
					<button class="btn btn-default" name="submit">Submit</button>
				</div>

			</form>

		</div>
	</div>
</div>

<!--footer-->
<?php include 'footer.php'; ?>
<!--footer end-->


</body>
</html>