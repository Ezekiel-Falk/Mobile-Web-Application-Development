<?php
//https://datatables.net/examples/basic_init/table_sorting.html
//database connection code goes here...

require_once "../global/connection.php";


$query = "SELECT * FROM petstore ORDER BY pst_id";

//because no user entered data, no need to bind values
$statement = $db-> prepare($query);
$statement->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="This is EzeWorks.LLC content page.">
	<meta name="author" content="Ezekiel O Faulknor aka EF aka EzeWorks">
	<link rel="icon" href="favicon.ico">

		<title>LIS4381 - Assignment 5</title>
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
	
		</style>
</head>
<body>

	<?php include_once("../global/nav.php"); ?>
	
	<div class="container-fluid">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>

						<h2>Pet Stores</h2>

<a href="rss.php">rss</a>
<br />


</body>
</html>
