<? global $title, $style, $nav_right;?>
<?php 
session_start();
include 'conn.php';

if (!isset($_SESSION['user_name'])) {
	$user_name = "";
}else{
	$user_name = $_SESSION['user_name'];

}
	
  if(isset($_SESSION['user']))
  {
    $nav_right='<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" arexpanded="false">
					Welcome, '.$user_name.'
					<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Account</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>';
  }
  else{
  	$nav_right='<li><a href="login.php">Login</a></li>
  				<li><a href="signup.php">Signup</a></li>';
  }
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?=$title?></title>
	<link rel="stylesheet" type="text/css" href="_styles/styles.css">
	<link href="<?php echo $style; ?>" rel="stylesheet">
	<!--libraries-->
	  <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
	  <script src="bootstrap-3.3.5-dist/jquery/jquery-1.11.3.min.js"></script>
	  <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	<!--libraries end-->
</head>