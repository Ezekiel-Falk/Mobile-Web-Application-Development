	<nav class="navbar navbar-inverse navbar-fixed-top" style="color: yellow;">
		<div class="container" style="background-color: yellow;">			
			<div class="navbar-header" style="background-color: yellow;">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="https://ezeworks.com/" target="_self">EzeWorks</a>
			</div>

			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav" style="color: yellow;">
					<li class="active" ><a href="index.php" style="color:yellow;">LIS4381</a></li>
					<li><a href="a1/index.php">A1</a></li>
					<li><a href="a2/index.php">A2</a></li>
					<li><a href="a3/index.php">A3</a></li>
					<li><a href="a4/index.php">A4</a></li>
					<li><a href="a5/index.php">A5</a></li>
					<li><a href="p1/index.php">P1</a></li>
					<li><a href="p2/index.php">P2</a></li>
					<li><a href="test/index.php">RSS</a></li>					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

<?php
date_default_timezone_set('America/New_York');
$today = date("m/d/y g:ia");
echo $today;
 ?>
	
