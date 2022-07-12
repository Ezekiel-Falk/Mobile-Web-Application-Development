<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is EzeWorks.LLC content page.">
	<meta name="author" content="Ezekiel O Faulknor aka EF aka EzeWorks">
	<link rel="icon" href="favicon.ico">

	<title>LIS4381 Write/Read File</title>
		<?php include_once("../css/include_css.php"); ?>

		<style type="text/css">

		h1
		 {
			font-family: serif;
			text-shadow: 2px 2px yellow;
			font-weight: bold;
			color:black; 
		 }
		 
		 h3
		{
			font-family: serif;
			text-shadow: 2px 2px yellow;
			font-weight: bold;
			color:black; 
		
		}

		h4
		{
			font-family: serif;
			text-shadow: 2px 2px yellow;
			font-weight: bold;
			color:black; 

		}

		h2
		{
			font-family: serif;
			text-shadow: 2px 2px yellow;
			font-weight: bold;
			color:black; 
		}
	
		</style>

</head>
<body>

	<?php include_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
					<div class="page-header">
						<?php include_once("global/header.php"); ?>	
					</div>

					<h2>File Data</h2>

						<form class="form-horizontal" role="form" method="post" action="process.php">
						
							<div class="form-group">
									<label class="control-label col-sm-2" for="comment">Comment:</label>

									<div class="col-sm-10">
										<textarea class="form-control" rows="5" name="comment" id="comment" placeholder="Please enter text here..."></textarea>
									</div>
							</div>

							<div class="form-group">
									<div class="col-sm-10">
										<button type="submit" class="btn btn-default">Submit</button>
									</div>
							</div> 
	
						</form>

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php include_once("../js/include_js.php"); ?>

</body>
</html>
