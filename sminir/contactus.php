<?php 
$title = "San Miguel Imus Nature Island Resort - Contact Us";
$style = "_styles/navbar.css";
include 'head.php';
include 'header.php';
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<h2>Contact Us</h2>
		</div>
	</div>
	<!--google map widget-->
	<div class="row">
		<div class="col-sm-8 center-block">
			<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.3603048301293!2d120.91964281442412!3d14.406381485669947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d319191c8fab%3A0x6c90c3662fbf010c!2sSan+Miguel+Resort!5e0!3m2!1sen!2sph!4v1445013165476" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<!--google map widget end-->
	<!--quick contact form-->
	<div class="row">
		<div class="col-sm-8">
			<h4>Address</h4>
			<p align="left">If you have any questions, comments or concerns about 	our services, please don't hesitate to contact us. We ensure that we 	will make your stay here an enjoyable and pleasant experience.</p>
			
			<strong>Telephone:</strong> <br>
			<strong>Mobile:</strong> (+63)916 - 6175754<br>
			<strong>Email:</strong>	<br>
			<strong>Address:</strong> 351 Alapan I-C, Imus, 4103 Cavite <br><br>
	
			<h4>Quick Contact</h4>
				<form id="quick-contact" method="post" class="form">
		
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
						<textarea class="form-control" rows="4" name="txtmessage" id="txtmessage"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-default" type="submit" name="submit">Submit</button>
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