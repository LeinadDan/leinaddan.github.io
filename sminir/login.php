<?php 
$title = "San Miguel Imus Nature Island Resort - Login";
$style = "_styles/navbar.css";
include 'head.php';
include 'header.php';


if (isset($_SESSION['user'])) {
	header('Location: index.php');
}

?>

<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<h3>Login</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<div  id="result">
				<?php 
					if(isset($_GET['error'])){
						echo '<div class="alert alert-warning">Wrong Email Address/Password.</div>';
					} 
				?>
			</div>
			<form id="login" method="post" action="verifylogin_user.php">
				<hr>
				<div class="form-group">
					<label for="txtemail">Email Address: </label>
					<input type="email" name="txtemail" id="txtemail" class="form-control" required >
				</div>
				<div class="form-group">
					<label for="txtpass">Password</label>
					<input type="password" name="txtpass" id="txtpass" class="form-control" required >
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