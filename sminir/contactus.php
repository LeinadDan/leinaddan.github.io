<?php 
$title = "San Miguel Imus Nature Island Resort - Contact Us";
$style = "_styles/navbar.css";
include 'head.php';
include 'header.php';
?>
<script type="text/javascript">

  function checkForm(form)
  {

    if(!form.captcha.value.match(/^\d{5}$/)) {
      alert('Please enter the CAPTCHA digits in the box provided');
      form.captcha.focus();
      return false;
    }

    return true;
  }
  	function counter(id) 
	{
 		document.getElementById('count').innerHTML = "Characters left: " + (1000 - id.value.length);
	};

</script>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h2>Contact Us</h2>
			<hr>
		</div>
	</div>
	<!--google map widget-->
	<div class="row">
		<div class="col-sm-8 center-block">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.3603048301293!2d120.91964281442412!3d14.406381485669947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d319191c8fab%3A0x6c90c3662fbf010c!2sSan+Miguel+Resort!5e0!3m2!1sen!2sph!4v1445013165476" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<!--sidebar-->
		<?php include 'sidebar.php'; ?>
		<!--sidebar end-->

	</div>
	<!--google map widget end-->
	<!--quick contact form-->
	<div class="row">
		<div class="col-sm-8">
			<h4>Address</h4>
			<p align="left">If you have any questions, comments or concerns about our services, please don't hesitate to contact us. We ensure that we 	will make your stay here an enjoyable and pleasant experience.</p>
			
			<strong>Telephone:</strong> <br>
			<strong>Mobile:</strong> (+63)916 - 6175754<br>
			<strong>Email:</strong>	<br>
			<strong>Address:</strong> 351 Alapan I-C, Imus, 4103 Cavite <br><br>
	
			
			<h4 id="qcontact">Quick Contact</h4>

			<hr>
			<div  id="result">
				<?php 
					if(isset($_GET['message'])){
						echo '<div class="alert alert-success">
								<p>Your message has been sent.</p>
								<p>We will try to get back to you as soon as possible. Thank you.</p>
							  </div>';
					}elseif (isset($_GET['error'])) {
						$error = $_GET['error'];
						if($error == 1){
							echo '<div class="alert alert-danger">
									<p><b>Invalid Email Address.</b></p>
							  	  </div>';
						}elseif($error == 2){
							echo '<div class="alert alert-danger">
									<p><b>Captcha is incorrect.</b></p>
							  	  </div>';
						}

					} 
				?>
			</div>
				<form id="quick-contact" method="post" class="form" action="captcha_val_contact.php">
		
					<div class="form-group">
						<label for="txtname">Name (required)</label>
						<input type="text" name="txtname" id="txtname" class="form-control" required >
					</div>
					<div class="form-group">
						<label for="txtemail">Email (required)</label>
						<input type="email" name="txtemail" id="txtemail" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="txtmessage">Message:</label>
						<textarea class="form-control" rows="8" name="txtmessage" id="txtmessage" maxlength="1000" onkeyup="counter(txtmessage);"></textarea>
						<br>
						<div id="count" style="margin-top:-15px;">Characters left: 1000</div>
					</div>
					<div class="form-group">
						<label>Captcha: </label>
						<p><img src="captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
						<small>copy the digits from the image into this box</small></p>
						<p><input type="text" class="form-control" size="6" maxlength="5" name="captcha" value="" onkeyup="this.value = this.value.replace(/[^\d]+/g, '');" required><br>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-default" name="submit" value="Submit">
					</div>
					
				</form>
		</div>


	</div>



	<!--quick contact form end-->
	<div class="row"><br><br></div>
</div>

</div>

<!--footer-->
<?php include 'footer.php'; ?>
<!--footer end-->

</body>



</html>
