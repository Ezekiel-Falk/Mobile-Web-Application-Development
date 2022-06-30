<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is EzeWorks.LLC content page">
		<meta name="author" content="Ezekiel O Faulknor aka EF aka EzeWorks">
		<link rel="icon" href="favicon.ico">

		<title>EzeWorks Online Portfolio</title>

		<?php include_once("css/include_css.php"); ?>	

		<!-- Carousel styles -->
		<style type="text/css">

		 h1
		 {
			font-family: serif;
			text-shadow: 2px 2px yellow;
			font-weight: bold
		 }
		 h2
		 {
			 margin: 0;     
			 background-color: red;
			 padding-top: 50px;
			 font-size: 52px;
			 font-family: "trebuchet ms", sans-serif;    
		 }
		 .item
		 {
			 background-color: blue;    
			 text-align: center;
			 height: 300px !important;
		 }
		 .carousel
		 {
			 margin: 20px 0px 20px 0px;
		 }
		 .bs-example
		 {
			 margin: 20px;
		 }

		 .lead 
		 {
			 color: white;
			 text-shadow: 2px 2px red;
			 font-weight: bold
			 
		 }

		 .lik1
		 {
			color: white;
			text-decoration-line: underline;
			font-weight: bold
		 }
		</style>

	</head>
	<body>

		<?php include_once("global/nav_global.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>

				<!-- Start Bootstrap Carousel  -->
				<div class="bs-example">
					<div
						id="myCarousel"
								class="carousel"
								data-interval="1000"
								data-pause="hover"
								data-wrap="true"
								data-keyboard="true"			
								data-ride="carousel">
						
    				<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>   
						<!-- Carousel items -->
						<div class="carousel-inner">

												<!-- -Note: you will need to modify the code to make it work with *both* text and images.  -->
												<div class="active item" style="background: url(img/ezeWorkOg.png) no-repeat left center; background-size: cover;">
													<div class="container">
														<div class="carousel-caption">
															<h3></h3>
															<p class="lead">Check out our <a class="lik1" href="https://ezeworks.com/">Main Page.</a></p>
											</div>
										</div>
									</div>
								
												<div class="item" style="background: url(img/TampaEzeWorks.png) no-repeat left center; background-size: cover;">
													<div class="container">
														<div class="carousel-caption">
															<h3></h3>
															<p class="lead">Check out our <a class="lik1" href="https://ezeworks.com/">Main Page.</a></p>
																							
											</div>
										</div>
									</div>

												<div class="item" style="background: url(img/boxOfEze.png) no-repeat left center; background-size: cover;">
													<div class="container">
														<div class="carousel-caption">
															<h3></h3>
															<p class="lead">Check out our <a  class="lik1" href="https://ezeworks.com/">Main Page.</a></p>
																							
											</div>
										</div>
									</div>
												

						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<!-- End Bootstrap Carousel  -->
				
				<?php
				include_once "global/footer.php";
				?>

			</div> <!-- end starter-template -->
    </div> <!-- end container -->

		<?php include_once("js/include_js.php"); ?>	
	  
  </body>
</html>
