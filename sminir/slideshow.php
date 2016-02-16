<?php 
	include 'conn.php';


	$sql = "SELECT location FROM slides";
	$result = mysqli_query($con,$sql);
	$slides = array();
	if($result){
		while($row = mysqli_fetch_array($result)){
			$slides[] = $row['location'];
		}
	}
	


?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Slide Show</title>
	<style type="text/css">
		body {
			text-align: center;
			margin: 0;
			padding: 0;
			} 
		#imageContainer {
			min-height: auto;
			min-width: 100%;
		}
	</style> 
	<script type="text/javascript"> 
		var imgSlide;
		var pic = 0;
		var timer;
		window.onload = function(){ 
			imgSlide = document.getElementById('img'); 
			images = new Array();
			// images[0] = new Image();
			// images[0].src = "_images/slide1.jpg";
			slides = <?php echo json_encode($slides,JSON_UNESCAPED_SLASHES); ?>;
			for (var i = 0; i <= slides.length-1; i++) {
				images[i] = new Image();
				images[i].src = slides[i];
				console.log(images[i]);
			};

		}
		function slide(){
			imgSlide.src = images[pic].src;
			if(pic < 3){
				pic++;
			}else{
				pic = 0 
			}
			timer = setTimeout(slide, 5000);
		} function prev(){
			if(timer)stopSlide(); 
			if(pic == 0){ 
				pic = 3; 
				imgSlide.src = images[pic].src;
			}else{
				pic--;
				imgSlide.src = images[pic].src;
			}
		} function next(){
			if(timer)stopSlide(); 
			if(pic == 3){ 
				pic = 0;imgSlide.src = images[pic].src;
			}else{
				pic++;imgSlide.src = images[pic].src;
			}  
		} function stopSlide(){
			clearTimeout(timer);
		}  
	</script>
</head> 
<body>
	<div id="imageContainer">
		<a class="left carousel-control" href="JavaScript:prev()" role="button">
        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        	<span class="sr-only">Previous</span>
      	</a>

		<img id="img" src="_images/slide1.jpg" alt="image" title="image" />
		
      	<a class="right carousel-control" href="JavaScript:next()" role="button">
        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        	<span class="sr-only">Next</span>
     	</a>
	</div>
	<a href="JavaScript:slide()" title="Start">Start</a>
	<a href="JavaScript:next()" title="Next">Next</a>
	<a href="JavaScript:prev()" title="Previous">Previous</a>
	<a href="JavaScript:stopSlide()" title="Stop">Stop</a> 
</body>
</html>