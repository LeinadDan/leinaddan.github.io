<br><br><br>
<footer class="footer">
	<div class="container">
		<small>
			<strong>Telephone:</strong> <br>
			<strong>Mobile:</strong> (+63)916 - 6175754<br>
			<strong>Email:</strong>	<br>
			<strong>Address:</strong> 351 Alapan I-C, Imus, 4103 Cavite <br><br>
		</small>

		<a href="#" class="back-to-top">Back to Top</a>
	</div>
</footer>
<!-- JavaScript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			// Show or hide the sticky footer button
			$(window).scroll(function() {
				if ($(this).scrollTop() > 200) {
					$('.back-to-top').fadeIn(200);
				} else {
					$('.back-to-top').fadeOut(200);
				}
			});
			
			// Animate the scroll to top
			$('.back-to-top').click(function(event) {
				event.preventDefault();
				
				$('html, body').animate({scrollTop: 0}, 300);
			})
		});
	</script>