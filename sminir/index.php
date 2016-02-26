<?php 
$title = "San Miguel Imus Nature Island Resort - Home";
$style = "_styles/carousel.css";
include 'head.php';
include 'header.php';
?>
<!--Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!--carousel slide indicators-->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1" class></li>
		<li data-target="#myCarousel" data-slide-to="2" class></li>
		<li data-target="#myCarousel" data-slide-to="3" class></li>
		<li data-target="#myCarousel" data-slide-to="4" class></li>
	</ol>
	<!--carousel slide indicator end-->
	<!-- carousel slides declaration-->
	<div class="carousel-inner" role="listbox">
		<!--item #1-->
		<div class="item active">
			<img class="first-slide" src="_images/img/cover_crop.jpeg" alt="First Slide">
			<div class="container">
				<div class="carousel-caption">
					<!-- <h1>Desert</h1>
					<p>Caption Text is placed here.</p> -->
				</div>
			</div>
		</div>
		<!--item #2-->
		<div class="item">
			<img class="second-slide" src="_images/img/065_crop.jpeg" alt="Second Slide">
			<div class="container">
				<div class="carousel-caption">
				</div>
			</div>
		</div>
		<!--item #3-->
		<div class="item">
			<img class="third-slide" src="_images/img/066_crop.jpeg" alt="Third Slide">
			<div class="container">
				<div class="carousel-caption">
				</div>
			</div>
		</div>

		<div class="item">
			<img class="fourth-slide" src="_images/img/057.jpeg" alt="Fourth Slide">
			<div class="container">
				<div class="carousel-caption">
				</div>
			</div>
		</div>

		<div class="item">
			<img class="fourth-slide" src="_images/img/059_crop.jpeg" alt="Fifth Slide">
			<div class="container">
				<div class="carousel-caption">
				</div>
			</div>
		</div>
	</div>
	<!--carousel slide declaration end-->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
<!--Carousel end-->


<div class="container">
	<!-- main content-->
	<div class="col-sm-8">
		<h2>Body</h2>
		<hr>
		<p>This is a placeholder.</p>
		<p>A CMS will probably go here. The CMS will mostly be used for announcements and updates.</p>
	</div>
	<!--main content end-->
	<!--sidebar-->
	<?php include 'sidebar.php'; ?>
	<!--sidebabr end-->
	
</div>
<!--footer-->
<?php include 'footer.php'; ?>
<!--footer end-->


<!--carousel frame-->
<svg xmlns ="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
	<defs>
		<style type="text/css"></style>
	</defs>
	<text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
</svg>
<!--carousel frame end-->
</body>
</html>