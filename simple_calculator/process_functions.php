<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs--also, demo no htmlspecialchars()
//exit(print_r($_POST));

/*
    Best practice: sanitize input - prepared statements, and es

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

                    <?php
                    //use for both non-function and function versions (see below)
                    if (!empty($_POST))
                    {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $operation = $_POST['operation'];

                        if (preg_match('/^[-+]?[0-9]*\.?[0-9]+$/', $num1) && preg_match('/^[-+]?[0-9]*\.?[0-9]+$/', $num2))
                            {
                                //exit(print_r($_POST));

                                echo '<h2>' . "$operation" . '</h2>';

                                //using function version
                                //create UDFs (user-defined functions)
                                function AddNum($x, $y)
                                {
                                    echo "$x" . " + " . "$y" . " = ";
                                    echo $x + $y;
                                }

                                function SubtractNum($x, $y)
                                {
                                    echo "$x" . " - " . "$y" . " = ";
                                    echo $x - $y;
                                }

                                function MultiplyNum($x, $y)
                                {
                                    echo "$x" . " * " . "$y" . " = ";
                                    echo $x * $y;
                                }

                                function DivideNum($x, $y)
                                {
                                    if($y == 0)
                                    {
                                        echo "Cannot divide by zero!";
                                    }
                                    else
                                    {
                                        echo "$x" . " / " . "$y" . " = ";
                                        echo $x / $y;
                                    }
                                }
                                function PowerNum($x, $y)
                                {
                                    echo "$x" . " raised to the power of " . "$y" . " = ";
                                    echo pow($x, $y);
                                }

                                //call functions
                                if($operation == 'addition')
                                {
                                    AddNum($num1, $num2);//TON: Type, Order, Number
                                }

                                else if($operation == 'subtraction')
                                {
                                    SubtractNum($num1, $num2);
                                }

                                else if($operation == 'multiplication')
                                {
                                    MultiplyNum($num1, $num2);
                                }

                                else if($operation == 'division')
                                {
                                    DivideNum($num1, $num2);
                                }

                                else if($operation == 'exponentiation')
                                {
                                    PowerNum($num1, $num2);
                                }

                                else
                                {
                                    echo "Must select an operation.";
                                }
                            
                            ?>
                            <p>
                            <?php
                        
                            }//end preg_match if

                            else
                            {
                                echo "Must enter valid  number.";
                            }//end preg_match else

                    }//end if (!empty($_POST))

                     //$_POST *is* empty--return to index.php
                     else
                     {
                        header('Location: index.php');
                     }// end else (!empty($_POST))

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
