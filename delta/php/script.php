<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delta</title>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/style.css"/>
     <link rel="shortcut icon" href="img/favicon.ico">
  </head>
  <body>		
  <header class="header">
  	<a href="#"><img src="img/delta_logo.png" alt="logo"></a>
  </header>
  <h4>Le discriminant delta est égal à:</h4>
  <div class="script">
		<?php

		// getting input from users 
		if (get_magic_quotes_gpc())
		{
		$a = stripslashes($_POST['a']); 
		$b = stripslashes($_POST['b']); 
		$b = stripslashes($_POST['b']); 
		}
		else {
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];
		}
		// declaring the results variables
		$delta = ($b * $b) - 4 * ($a) * ($c);
		$x1 = (-$b - sqrt($delta)) / 2 * $a;
		$x2 = (-$b + sqrt($delta)) / 2 * $a;
		$x0 = (-$b) / 2 * $a;
		$x4 = -b;

		// return the value of delta
		echo($delta);
	?>
	<!-- text introduction equations solutions -->
	</div>
<h4 style="padding-top: 3%;">Les solutions de cette équation sont:</h4>
	<div class="equation" style="
    text-align: center;
    font-weight: 600;
    font-size: 1.8em;
    padding-top: 1%;
    padding-bottom: 2%;
">
	<?php
	// getting the results of the equation
	// case 1 (if delta is superior to 0) => x1 = -b - Vdelta / 2a or x2 = -b + vDelta / 2a
		if ($delta > 0)
		{
			echo($x1);
			echo'<br />';
			echo("ou");
			echo'<br />';
			echo($x2);
		}
		// case 2 (if delta equals 0) => x = -b / 2a
		elseif ($delta === 0) {
			echo($x0);
		}
		// case 3 (if delta is inferior to 0) => Then the solution is ∅.
		else {
			echo("∅");
		}
		// for first degree equations
		if ($a === 0) {
			echo($x4);
		}


		
		?>
	</div>
	
<footer>
	<h4>Made by <a href="http://machrouh.com">Othmane Machrouh.</a></h4>
</footer>
</body>
</html>