<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"> <!-- set the meta charset --> 
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- tell IE to use latest rendering engine  -->
		<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- make the page responsive to device width -->
		
		<!-- normalize stylesheet -->
		<link rel="stylesheet" type="text/css" href="assets/normalize.css">
		<!-- Bootstrap stylesheet -->
		<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
		<!-- Default stylesheet -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
		
		<!-- BACKGROUND FALLBACK FOR IE9 AND BELOW  -->
		<!--[if lte IE 9]>
		<style>
	
		#xxMain-container{
			background-color: rgb(255, 255, 255) !important;
		}
	
		</style>
	  	<![endif]-->
	 
		
		<title>PcCowboy | Home</title>
	</head>
	
<body>

<div class="container" id="xxMain-container">
	
	<div class="xxSite-header">
		<h3><?php echo "Hello world yow!! Wazzupp! I'm PcCowboy of Philippines"; ?></h3>
		<hr>

		<a href="http://pccowboy.x10.bz/" class="btn btn-primary btn-md xxSite-header-links">Home</a> |
		<a href="#" class="btn btn-primary btn-md xxSite-header-links">My Works</a> |
		<a href="#" class="btn btn-primary btn-md xxSite-header-links">About</a> |
		<a href="#" class="btn btn-primary btn-md xxSite-header-links">Contact</a> 
		<hr>
	</div><!-- END xxSite-header -->

	<div class="xxMain-content">
		<p>Below is just a simple PHP test</p>
		<hr>

		<p>
		<?php
		
		for($i = 0; $i < 100; $i++){
			for($j=0; $j < $i; $j++){
				echo "*";
			}
			echo "<br>";
			echo "\n";

		}


		?>
		</p>
		<hr>
	</div><!-- END xxMain-content -->
	<div class="xxSite-footer" style="text-align : center">

		<p>PcCowboy 2016</p>
	</div><!-- END xxSite-footer -->

</div><!-- END xxMain-container -->



<!-- Inlcude jQuery and Bootstrap START -->
<script src="assets/resources/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Inlcude jQuery and Bootstrap END -->

<!-- Use HTML5shiv.js and respond.js Fix if browser is IE9 or below -->
	<!--[if lte IE 9]>
		<script src="assets/html5shiv.js"></script>
		<script src="assets/respond.js"></script>
	<![endif]-->
<!-- END HTML5shiv.js and Respond.js -->
</body>
</html>