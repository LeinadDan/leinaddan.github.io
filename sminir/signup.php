<?php 
$title = "San Miguel Imus Nature Island Resort - Signup";
$style = "_styles/navbar.css";
include 'head.php';
include 'header.php';
?>
<script type="text/javascript">
function pass_str(field, output) {
    pass_buf_value = document.getElementById(field).value;
    pass_level = 0;
    if (pass_buf_value.match(/[a-z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[A-Z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[0-9]/g)) {
        pass_level++;
    }
    if (pass_buf_value.length >= 20) {
        pass_level++;
    }
    output_val = '';
    switch (pass_level) {
        case 1: output_val='Weak'; break;
        case 2: output_val='Normal'; break;
        case 3: output_val='Strong'; break;
        case 4: output_val='Very strong'; break;
        default: output_val='Very weak'; break;
    }
    if (document.getElementById(output).value != pass_level) {
        document.getElementById(output).value = pass_level;
        document.getElementById(output).innerHTML = output_val;
    }
    return 1;
}
</script>
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
						$error = $_GET['error'];
						switch ($error) {
							case '1':
								echo '<div class="alert alert-warning">Email Address is already in use. Please log in.</div>';
								break;
							case '2':
								echo '<div class="alert alert-warning">Password must be at least 6 characters in length.</div>';
								break;
							case '3':
								echo '<div class="alert alert-warning">Captcha is incorrect.</div>';
								break;
						}
					} 
				?>
			</div>
			<form id="signup" name="signup" method="post" onSubmit="return formValidation();">
				<hr>
				<h3>Login Details</h3>
				<div class="form-group">
					<label for="txtemail">Email Address: </label>
					<input type="email" name="txtemail" id="txtemail" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtconemail">Confirm Email Address: </label>
					<input type="email" name="txtconemail" id="txtconemail" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtpass">Password: </label>
					<input type="password" name="txtpass" id="txtpass" class="form-control" onkeyup="pass_str('txtpass','output');" required >Password Strength: <span id="output" style="font-weight:bold;"></span>
				</div>
				<div class="form-group">
					<label for="txtrepass">Confirm Password: </label>
					<input type="password" name="txtrepass" id="txtrepass" class="form-control" required >
				</div>
				<br>
				<hr>
				<br>
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
					<label for="txtmobile">Mobile Number: </label>
					<input type="text" name="txtmobile" id="txtmobile" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtstreet">Street Address: </label>
					<input type="text" name="txtstreet" id="txtsreet" class="form-control">
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

				<div class="checkbox">
					<label>
						<input type="checkbox" value="true">
						I agree to the Terms and Policies...
					</label>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-default" name="submit">Submit</button>
				</div>

			</form>

		</div>
	</div>
</div>

<!--footer-->
<?php include 'footer.php'; ?>
<!--footer end-->


</body>

<script type="text/javascript">
function check_v_pass(field, output) {
    pass_buf_value = document.getElementById(field).value;
    pass_level = 0;
    if (pass_buf_value.match(/[a-z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[A-Z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[0-9]/g)) {
        pass_level++;
    }
    if (pass_buf_value.length < 5) {
        if(pass_level >= 1) pass_level--;
    } else if (pass_buf_value.length >= 20) {
        pass_level++;
    }
    output_val = '';
    switch (pass_level) {
        case 1: output_val='Weak'; break;
        case 2: output_val='Normal'; break;
        case 3: output_val='Strong'; break;
        case 4: output_val='Very strong'; break;
        default: output_val='Very weak'; break;
    }
    if (document.getElementById(output).value != pass_level) {
        document.getElementById(output).value = pass_level;
        document.getElementById(output).innerHTML = output_val;
    }
    return 1;
}
</script>
</html>