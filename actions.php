<?php
session_start();
$username = "aprilmitchell";
$password = "1234";

if($username==$_POST["username"] && $password==$_POST["password"]){
	$_SESSION["username"] = $username;
		header("Location: WorkoutList.php");
} else {
	unset($_SESSION["username"]);
}

?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>NTS Inventory Manager</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1>Welcome to Nikki Taylor Salon</h1>
					
					<nav id="nav">
						<ul>
							
			
							<li><a href="index.php" class="button">Home</a></li>
							<li><a href="WorkoutList.php" class="button">Login</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner --> 

			<div class box>
				<section id="banner">
					<?php
						echo "<h2><strong>Hi $username!</strong></h2>";
					?>
					
					<p> What would you like to do?</p>
					
					
					<?php
					if (isset($_SESSION["username"]))
					{echo("<h1>Login Successful</h1>");
					echo("Please Proceed to the <a href='workoutlist.php'> Workout List");
					} else {
					
					?>
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="checkout.php">Checkout</a></li>
								<li><a href="addInventory.php">Add New Inventory</a></li>
								<li><a href="index.php">Return Home</a></li>
							
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					<?php 
						}
					?>
				
				</section>
					</div>
			<!-- Main -->
				<section id="main" class="container">

				</section>

		

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>