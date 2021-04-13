<?php

	$title = 'Dashboard';
	include_once('header.php');

?>

<body>
	<script>
		window.addEventListener('mouseup',function(e){
			const menu = document.getElementById('menu');
			if (e.target !=menu) {
				menu.style.display = 'none';
			}
		})
	</script>
	
		<?php  include_once('midel.php'); ?>

		<div class="side-bar ">
			<?php include('link.php'); ?>
		</div>

		<div class="row">
			<div class="column">
				<div class="card card1">
					</i><h2>Farmer</h2>
					<p>5</p>
				</div>
			</div>
			<div class="column">
				<div class="card card2">
					<h2>Buyer</h2>
					<p>5</p>
				</div>
			</div>
			<div class="column">
				<div class="card card3">
					<h2>Worker</h2>
					<p>5</p>
				</div>
			</div>
		</div>
		
</body>
</html>