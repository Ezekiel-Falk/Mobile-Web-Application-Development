<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs--also, demo no htmlspecialchars()
//exit(print_r($_POST));

//$comments = trim($_POST['comments']);

/*

*/
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

	<title>LIS4381 - Simple Calculator</title>
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

                    <p class="text-justify">

                        <?php
                        //create/open file for appending write/read
                        //Note: w+ = Read/Write. Opens and truncates file, that is, removes existing data (or creates new file, if not exists). Starts at beginning of file.

                        $myfile = fopen("file.txt", "w+") or exit("Unable to open file!");
                        $txt = $_POST['comment'];
                        fwrite($myfile, $txt); //write to file
                        fclose($myfile); //close file

                        //Note: r+ = Read/Write. Starts at beginning of file.
                        $myfile = fopen("file.txt", "r+") or exit("Unable to open file!");
                        //output one line until end-of-file
                        while(!feof($myfile))
                            {
                                echo fgets($myfile) . "<br />";
                            }
                        //echo fread($myfile, filesize("file.txt")); //read from file
                        fclose($myfile); //close file
                        ?>
                    </p>

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php include_once("../js/include_js.php"); ?>

</body>
</html>
