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

					<h2>Perform Calculation</h2>

						<form  class="form-horizontal" role="form" method="post" action="process_functions.php">
							
								<div class="form-group">
										<label class="col-sm-4 control-label" for="num1">Num 1:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" name="num1" id="num1" placeholder="Enter first number">
										</div>
								</div>

								<div class="form-group">
										<label class="col-sm-4 control-label" for="num2">Num 2:</label>
										<div class="col-sm-4">
												<input type="text" class="form-control" name="num2" id="num2" placeholder="Enter second number"/>
										</div>
								</div>

								<div class="form-group">
									<div class="col-sm-12">
										<lable class="checkbox-inline">
											<input type="radio" name="operation" id="addition" value="addition" checked="true">addition
										</lable>

										<lable class="checkbox-inline">
											<input type="radio" name="operation" id="subtraction" value="subtraction">subtraction
										</lable>

										<lable class="checkbox-inline">
											<input type="radio" name="operation" id="multiplication" value="multiplication">multiplication
										</lable>

										<lable class="checkbox-inline">
											<input type="radio" name="operation" id="division" value="division">division
										</lable>

										<lable class="checkbox-inline">
											<input type="radio" name="operation" id="exponentiation" value="exponentiation">exponentiation
										</lable>

									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-12">
											<button type="submit" class="btn btn-default">Calculate</button>
									</div>
								</div>
						</form>
					<!-- End Form-Building -->

			<?php include_once "global/footer.php"; ?>
			
		</div> <!-- end starter-template -->
 </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
			<?php include_once("../js/include_js.php"); ?>
<!--
<script type="text/javascript">
 //See Regular Expressions: http://www.qcitr.com/usefullinks.htm#lesson7
 $(document).ready(function() {

	$('#add_petStore_form').formValidation({
			message: 'This value is not valid',
			icon: {
					valid: 'fa fa-check',
					invalid: 'fa fa-times',
					validating: 'fa fa-refresh'
			},
			fields: {
					name: {
							validators: {
									notEmpty: {
									 message: 'Name required'
									},
									stringLength: {
											min: 1,
											max: 30,
									 message: 'Name no more than 30 characters'
									},
									regexp: {
										//alphanumeric, hyphens, underscores, and spaces
										//regexp: /^[a-zA-Z0-9\-_\s]+$/,										
										//similar to: (though, \w supports other Unicode characters)
											regexp: /^[\w\-\s]+$/,
										message: 'Name can only contain letters, numbers, hyphens, and underscore'
									},									
							},
					},

					street: {
							validators: {
									notEmpty: {
											message: 'Street required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'Street no more than 30 characters'
									},
									regexp: {
										//street: only letters, numbers, commas, hyphens, space character, and periods
										regexp: /^[a-zA-Z0-9,\-\s\.]+$/,		
									message: 'Street can only contain letters, numbers, commas, hyphens, or periods'
									},									
							},
					},

					city: {
							validators: {
									notEmpty: {
											message: 'City required'
									},
									stringLength: {
											min: 1,
											max: 30,
											message: 'City no more than 30 characters'
									},
									regexp: {
										//cites: can contain hyphens: Winston-Salem
										regexp: /^[a-zA-Z0-9\-\s]+$/,		
									message: 'City can only contain letters, numbers, hyphens, and space character (29 Palms)'
									},									
							},
					},

					state: {
							validators: {
									notEmpty: {
											message: 'State required'
									},
									stringLength: {
											min: 2,
											max: 2,
											message: 'State must be two characters'
									},
									regexp: {
										//State: can contain letters Ex:(FL, NY, TX)
										regexp: /^[a-zA-Z]+$/,		
									message: 'State can only contain letters'
									},									
							},
					},

					zip: {
							validators: {
									notEmpty: {
											message: 'Zip required, only numbers'
									},
									stringLength: {
											min: 5,
											max: 9,
											message: 'Zip must be 5, and no more than 9 digits'
									},
									regexp: {
										//Zip: can only contain numbers Ex:(56743)
										regexp: /^[0-9]+$/,		
									message: 'Zip can only contain numbers'
									},									
							},
					},

					phone: {
							validators: {
									notEmpty: {
											message: 'Phone required, including area code, only numbers'
									},
									stringLength: {
											min: 10,
											max: 10,
											message: 'Phone must be 10 digits'
									},
									regexp: {
										//Phone: can only contain numbers Ex:(7638926715)
										regexp: /^[0-9]+$/,		
									message: 'Phone can only contain numbers'
									},									
							},
					},

					email: {
							validators: {
									notEmpty: {
											message: 'Email address is required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'Email no more than 100 characters'
									},
									regexp: {
										regexp: /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/,		
									message: 'Must include valid email'
									},									
							},
					},

					url: {
							validators: {
									notEmpty: {
											message: 'URL required'
									},
									stringLength: {
											min: 1,
											max: 100,
											message: 'URL no more than 100 characters'
									},
									regexp: {
										regexp: /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/,		
									message: 'Must include valid URL'
									},									
							},
					},

					ytdsales: {
							validators: {
									notEmpty: {
											message: 'YTD sales is required'
									},
									stringLength: {
											min: 1,
											max: 11,
											message: 'YTD sales can be no more than 10 digit, including decimal point'
									},
									regexp: {
										regexp: /^[0-9\.]+$/,		
									message: 'YTD sales can only contain numbers and decimal point'
									},									
							},
					},
					
			}
	});
});
</script>
-->
</body>
</html>
